<?php

class Sewa extends Controller
{
    public function index()
    {
        $data['title'] = 'Sewa | PinBuk';
        $data['sewa'] = $this->model('SewaModel')->getAllSewa();
        $data['daftarAnggota'] = $this->model('AnggotaModel')->getAllAnggota();
        $data['buku'] = $this->model('BukuModel')->getAllbuku();
        $this->view('template/header', $data);
        $this->view('sewa/index', $data);
        $this->view('template/footer');
    }

    public function detailAnggota($id)
    {
        $data['title'] = 'Detail Anggota | PinBuk';
        $data['anggota'] = $this->model('AnggotaModel')->getAnggotaById($id);
        $this->view('template/header', $data);
        $this->view('sewa/detailAnggota', $data);
        $this->view('template/footer');
    }

    public function detailBuku($id)
    {
        $data['title'] = 'Detail Buku | PinBuk';
        $data['buku'] = $this->model('BukuModel')->getBukuById($id);
        $this->view('template/header', $data);
        $this->view('sewa/detailBuku', $data);
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
