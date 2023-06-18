<?php

class Sewa extends Controller
{
    public function index()
    {
        $data['title'] = 'Sewa | PinBuk';
        $data['sewa'] = $this->model('SewaModel')->getAllSewa();
        $data['daftarAnggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $data['buku'] = $this->model('bukuModel')->getAllbuku();
        $this->view('template/header', $data);
        $this->view('sewa/index', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if ($this->model('SewaModel')->tambahSewa($_POST) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/sewa');
            exit;
        }
    }

    public function hapus($kode_sewa)
    {
        if ($this->model('SewaModel')->hapusSewa($kode_sewa) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/sewa');
            exit;
        }
    }

    public function kembalikan($kode_sewa)
    {
        if ($this->model('SewaModel')->pengembalianSewa(['kode_sewa' => $kode_sewa]) > 0) {
            header('Location: http://localhost/peminjaman_buku/public/sewa');
            exit;
        }
    }
}
