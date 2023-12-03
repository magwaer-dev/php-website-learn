<?php

require 'vendor/autoload.php';
require 'src/Config/Config.php';
require 'src/Config/Database.php';

try {
    $pdo = \MVC\Config\Database::connect();
} catch (\Exception $e) {
    die($e->getMessage());
}

$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/Routes/routes.php';
$router->dispatch($uri, $pdo);
