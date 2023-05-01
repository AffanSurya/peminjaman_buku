<?php

namespace controllers;

use core\Controller;

class Home extends Controller
{
    // public function index()
    // {
    //     $this->view('home/index');
    // }

    public function __construct()
    {
        $this->view('home/index');
    }
}
