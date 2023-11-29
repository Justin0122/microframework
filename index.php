<?php
require_once 'app/Router.php';

$router = new Router();

$router->addRoute('/', 'HomeController');
$router->addRoute('/about', 'AboutController');
$router->addRoute('/test');

$router->handleRequest($_SERVER['REQUEST_URI']);

