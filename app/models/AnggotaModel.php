<?php

class AnggotaModel extends Database
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
        $this->setTable('Anggota');
    }


    public function getAllAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->getTable());
        return $this->db->resultSet();
    }

    public function getAnggotaById($id_anggota)
    {
        $this->db->query("SELECT * FROM {$this->getTable()} WHERE id_anggota = :id_anggota");
        $this->db->bind('id_anggota', $id_anggota);
        return $this->db->single();
    }

    public function tambahAnggota($data)
    {
        $this->db->query("INSERT INTO {$this->getTable()} VALUES('', :nama, :jenis_kelamin, :no_telepon, :email, :alamat)");

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
        $this->db->query("DELETE FROM {$this->getTable()} WHERE id_anggota = :id_anggota");
        $this->db->bind('id_anggota', $id_anggota);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahAnggota($data)
    {
        $this->db->query("UPDATE {$this->getTable()} SET 
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

    public function panelTitle()
    {
        return 'Daftar Anggota';
    }
}
