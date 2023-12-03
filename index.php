<?php

require 'vendor/autoload.php';
require 'src/Config/config.php'; // Include the updated config file

$pdo = establishDatabaseConnection(); // Create a PDO instance

$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/Routes/routes.php';
$router->dispatch($uri, $pdo); // Pass the $pdo instance to the dispatch method
