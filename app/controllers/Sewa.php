<?php

class Sewa extends Controller
{
    public function index()
    {
        $data['title'] = 'Sewa | PinBuk';
        $data['sewa'] = $this->model('SewaModel')->getAllSewa();
        $this->view('template/header', $data);
        $this->view('sewa/index', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if ($this->model('Sewa')->tambahSewa($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/sewa');
            exit;
        }
    }
}
