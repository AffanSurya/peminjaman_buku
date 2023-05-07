<?php

require_once '../app/core/Controller.php';

class DaftarAnggota extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Anggota | PinBuk';
        $this->view('template/header', $data);
        $this->view('daftarAnggota/index');
        $this->view('template/footer');
    }
}
