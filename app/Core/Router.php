<?php

namespace App\Core;

class Router
{
    private static array $routes = [];

    public static function add(string $method, string $uri, $action)
    {
        $method = strtoupper($method);
        $uri = self::normalize($uri);
        self::$routes[$method][$uri] = $action;
    }

    public static function get(string $uri, $action)
    {
        self::add("GET", $uri, $action);
    }

    public static function post(string $uri, $action)
    {
        self::add("POST", $uri, $action);
    }

    public static function prefix(string $prefix, callable $callback)
    {
        $callback(new class ($prefix) {
            private string $prefix;

            public function __construct(string $prefix)
            {
                $this->prefix = $prefix;
            }

            public function get(string $uri, $action)
            {
                Router::add("GET", $this->prefix . $uri, $action);
            }

            public function post(string $uri, $action)
            {
                Router::add("POST", $this->prefix . $uri, $action);
            }
        });
    }

    public static function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = self::normalize($path);

        $action = self::$routes[$method][$path] ?? null;

        if (!$action) {
            http_response_code(404);
            echo "404 Page NOT FOUND";
            return;
        }

        if (is_callable($action)) {
            call_user_func($action);
            return;
        }

        if (is_string($action)) {
            [$controller, $handler] = explode('@', $action);
            $controller = "App\\Controllers\\$controller";

            if (!class_exists($controller)) {
                http_response_code(500);
                echo "Controller $controller NOT FOUND";
                return;
            }

            $instance = new $controller;

            if (!method_exists($instance, $handler)) {
                http_response_code(500);
                echo "Method $handler NOT FOUND";
                return;
            }

            call_user_func([$instance, $handler]);
            return;
        }

        http_response_code(500);
        echo "Invalid route action";
    }

    private static function normalize(string $uri)
    {
        $uri = '/' . ltrim($uri, '/');
        return rtrim($uri, '/') ?: '/';
    }
}