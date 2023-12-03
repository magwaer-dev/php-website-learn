<?php


use MVC\Routes\Router;
use MVC\Controllers\UserController;

$router = new Router();

$router->addRoute('/', UserController::class, 'index');
$router->addRoute('/create', UserController::class, 'create'); 

return $router;

