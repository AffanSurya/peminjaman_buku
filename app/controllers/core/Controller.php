<?php


class Controller
{
    public function view($view)
    {
        require_once '../app/models/Anggota.php';
        $data = new Anggota();
        $data->$nama = "as";

        require_once "../app/views/{$view}.php";
    }
}
