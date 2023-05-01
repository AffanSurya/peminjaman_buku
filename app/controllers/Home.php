<?php

require_once 'function/Controller.php';

class Home extends Controller
{
    public function __construct()
    {
        $this->view('home/index');
    }
}
