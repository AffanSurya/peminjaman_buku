<?php

class DaftarAnggota extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Anggota | PinBuk';
        $data['anggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $this->view('template/header', $data);
        $this->view('daftarAnggota/index', $data);
        $this->view('template/footer');
    }
}
