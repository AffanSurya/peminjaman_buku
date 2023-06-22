<?php

abstract class Controller
{

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model;
    }

    // public function allModel()
    // {
    //     require_once '../app/core/Polimor.php';
    //     $Polimor = new Polimor();
    //     $Polimor->database = new Database();
    //     $Polimor->database = DaftarAnggota::PanelTitle();

    //     return $Polimor->database;
    // }

    abstract public function index();
}
