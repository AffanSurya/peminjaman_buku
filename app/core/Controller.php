<?php

namespace core;

class Controller
{
    public function view($view)
    {
        require_once '../views/home/' . $view . '.php';
    }
}
