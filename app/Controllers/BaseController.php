<?php

namespace App\Controllers;

class BaseController
{
    protected function view($viewName): bool
    {
        $viewPath = __DIR__ . '/../../views/' . $viewName . '.php';

        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            return false;
        }
        return true;
    }

}
