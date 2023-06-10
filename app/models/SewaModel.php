<?php

class SewaModel extends Database
{
    private $table = 'sewa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSewa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahSewa($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES('', :nama, :judul, :tgl_sewa, :tgl_kembali, :status)");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tgl_sewa', $data['tgl_sewa']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
