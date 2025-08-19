<?php
namespace App\Core;

class BaseController
{
    protected static function view(string $view, array $data = [], string $layout = 'Layouts/main')
    {
        extract($data);
        $view_file = BASE_PATH . "/resources/views/{$view}.php";

        if (!file_exists($view_file)) {
            echo "⚠️ View {$view} not found in resources/views.";
            return;
        }

        ob_start();
        require $view_file;
        $content = ob_get_clean();

        $layoutfile = BASE_PATH . "/resources/views/Layouts/{$layout}.php";
        if (file_exists($layoutfile)) {
            require $layoutfile;
        } else {
            echo $content;
        }

    }

    protected static function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }
}