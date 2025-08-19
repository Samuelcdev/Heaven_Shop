<?php

require_once __DIR__ . "/../vendor/autoload.php";

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', '/heaven_shop/public'); 

use App\Core\Router;

require_once BASE_PATH . "/routes/web.php";

Router::dispatch();