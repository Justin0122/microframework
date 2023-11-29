<?php
include_once 'app/interfaces/ControllerInterface.php';
include_once 'app/controllers/BaseController.php';

class HomeController extends BaseController implements ControllerInterface {
    public function run() {
        return $this->view('home');
    }
}
