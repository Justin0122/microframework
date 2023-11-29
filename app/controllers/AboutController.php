<?php
include_once 'app/interfaces/ControllerInterface.php';
include_once 'app/controllers/BaseController.php';

class AboutController extends BaseController implements ControllerInterface
{
    public function run()
    {

        return $this->view('about');
    }
}