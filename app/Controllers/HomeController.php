<?php

namespace App\Controllers;

use App\Interfaces\ControllerInterface;
use App\Utils\View;

class HomeController extends BaseController implements ControllerInterface {
    public function render(): View {
        $viewContent = $this->view('home');
        return new View($viewContent);
    }
}