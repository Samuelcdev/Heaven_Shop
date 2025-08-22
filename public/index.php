<?php

require_once __DIR__ . "/../vendor/autoload.php";

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', '/heaven_shop/public');

use Dotenv\Dotenv;
use App\Core\Router;

$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

require_once BASE_PATH . "/routes/web.php";

Router::dispatch();