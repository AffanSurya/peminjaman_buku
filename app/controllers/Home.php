<?php

require_once 'core/Controller.php';

class Home extends Controller
{
    public function __construct()
    {

        $this->view('template/header');
        $this->view('home/index');
        $this->view('template/header');
    }
}
