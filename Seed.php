<?php
require_once __DIR__ . '/vendor/autoload.php';

use Database\DatabaseSeeder;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

DatabaseSeeder::run();
