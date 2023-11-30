<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'autoloader.php';

use App\Router;
$router = new Router();

$router->addRoute('/', 'HomeController');
$router->addRoute('/about', 'AboutController');
$router->addRoute('/test');

$router->handleRequest($_SERVER['REQUEST_URI']);