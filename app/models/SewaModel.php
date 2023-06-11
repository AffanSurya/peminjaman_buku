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
        $this->db->query("INSERT INTO $this->table VALUES('', :nama, :judul, NOW(), '', '', '')");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('judul', $data['judul']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
