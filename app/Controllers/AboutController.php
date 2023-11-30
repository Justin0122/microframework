<?php

namespace App\Controllers;

use App\Interfaces\ControllerInterface;
use App\Utils\View;

class AboutController extends BaseController implements ControllerInterface {
    public function render(): View {
        $viewContent = $this->view('about');
        return new View($viewContent);
    }
}
