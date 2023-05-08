<?php

class BukuModel extends Koneksi
{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Koneksi;
    }

    public function getAllBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE kode_buku = :kode_buku");
        $this->db->bind('kode_buku', $id);
        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES(:kode_buku, :judul, :pengarang, :penerbit)");

        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBuku($kode_buku)
    {
        $this->db->query("DELETE FROM $this->table WHERE kode_buku = :kode_buku");
        $this->db->bind('kode_buku', $kode_buku);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahBuku($data)
    {
        $this->db->query("UPDATE $this->table SET 
        kode_buku=:kode_buku,
        judul=:judul,
        pengarang=:pengarang,
        penerbit=:penerbit WHERE kode_buku = :kode_buku
        ");

        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('kode_buku', $data['kode_buku']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
