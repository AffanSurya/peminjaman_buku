<?php

class Buku extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Buku | PinBuk';
        $data['panel'] = $this->model('BukuModel')->panelTitle();
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('template/header', $data);
        $this->view('buku/index', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if ($this->model('BukuModel')->tambahBuku($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/buku');
            exit;
        }
    }

    public function hapus($isbn)
    {
        if ($this->model('BukuModel')->hapusBuku($isbn) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/buku');
            exit;
        }
    }

    public function ubah()
    {
        if ($this->model('BukuModel')->ubahBuku($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/buku');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('BukuModel')->getBukuById($_POST['id']));
    }
}
