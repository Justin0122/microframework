<?php

namespace App;

use App\Controllers\BaseController;

class Router extends BaseController
{
    private array $routes = [];

    public function addRoute($url, $controller = null): void
    {
        $this->routes[$url] = $controller;
    }

    public function handleRequest($url): bool
    {
        $url = substr($url, strpos($url, '/', 1));
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url];
            if ($controller == null) {
                return $this->view($url);
            } else {
                $this->callController($controller);
            }
        } else {
            $this->notFound();
        }
        return false;
    }

    private function callController($controller): void
    {
        require_once 'app/Controllers/' . $controller . '.php';
        $controller = 'App\\Controllers\\' . $controller;
        $controller = new $controller();
        $controller->render();
    }

    private function notFound(): void
    {
        header("HTTP/1.0 404 Not Found");
        echo '404 - Not Found';
    }
}
