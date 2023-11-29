<?php
require_once 'app/Router.php';

$router = new Router();

$router->addRoute('/', 'HomeController');
$router->addRoute('/about', 'AboutController');

$router->handleRequest($_SERVER['REQUEST_URI']);

