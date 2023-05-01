<?php

require_once 'core/Controller.php';

class Home extends Controller
{
    public function __construct()
    {
        $this->view('home/index');
    }
}
