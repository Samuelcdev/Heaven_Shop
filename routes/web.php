<?php

use App\Core\Router;

Router::get('/', function () {
    header("Location: /Home");
    exit;
});

Router::get('/Home', 'HomeController@homeView');

Router::prefix('/products', function ($router) {
    $router->get('', 'ProductController@mainView');
});
