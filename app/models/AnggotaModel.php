<?php

class AnggotaModel extends Database
{
    private $table = 'anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAnggotaById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_anggota = :id_anggota");
        $this->db->bind('id_anggota', $id);
        return $this->db->single();
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

    public function ubahAnggota($data)
    {
        $this->db->query("UPDATE $this->table SET 
        nama=:nama,
        jenis_kelamin=:jenis_kelamin,
        no_telepon=:no_telepon,
        email=:email,
        alamat=:alamat WHERE id_anggota = :id_anggota
        ");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_anggota', $data['id_anggota']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
