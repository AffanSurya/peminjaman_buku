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

    public function tambah()
    {
        if ($this->model('AnggotaModel')->tambahAnggota($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/daftarAnggota');
            exit;
        }
    }

    public function hapus($id_anggota)
    {
        if ($this->model('AnggotaModel')->hapusAnggota($id_anggota) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/daftarAnggota');
            exit;
        }
    }

    public function ubah()
    {
        if ($this->model('AnggotaModel')->ubahAnggota($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/daftarAnggota');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('AnggotaModel')->getAnggotaById($_POST['id']));
    }
}
