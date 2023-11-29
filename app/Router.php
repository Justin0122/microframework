<?php
class Router {
    private $routes = [];

    public function addRoute($url, $controller) {
        $this->routes[$url] = $controller;
    }

    public function handleRequest($url) {
        $url = substr($url, strpos($url, '/', 1));
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url];
            $this->callController($controller);
        } else {
            $this->notFound();
        }
    }

    private function callController($controller) {
        require_once 'app/controllers/' . $controller . '.php';
        $controllerInstance = new $controller();
        $controllerInstance->run();
    }

    private function notFound() {
        header("HTTP/1.0 404 Not Found");
        echo '404 - Not Found';
    }
}
?>