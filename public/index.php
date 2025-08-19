<?php

require_once __DIR__ . "/../vendor/autoload.php";

define('BASE_PATH', dirname(__DIR__));

use App\Core\Router;

require_once BASE_PATH . "/routes/web.php";

Router::dispatch();