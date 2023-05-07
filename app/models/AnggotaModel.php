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
}
