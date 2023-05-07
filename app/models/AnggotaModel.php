<?php

class AnggotaModel extends Koneksi
{
    private $table = 'anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Koneksi;
    }

    public function getAllAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahAnggota($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES('', :nama, :jenis_kelamin, :no_telepon, :email, :alamat)");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusAnggota($id_anggota)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_anggota = :id_anggota");
        $this->db->bind('id_anggota', $id_anggota);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
