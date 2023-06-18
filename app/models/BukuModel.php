<?php

class BukuModel extends Database
{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($isbn)
    {
        $this->db->query("SELECT * FROM $this->table WHERE isbn = :isbn");
        $this->db->bind('isbn', $isbn, PDO::PARAM_STR);
        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $this->db->query("INSERT INTO $this->table VALUES(:isbn, :judul, :pengarang, :penerbit)");

        $this->db->bind('isbn', $data['isbn'], PDO::PARAM_STR);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBuku($isbn)
    {
        $this->db->query("DELETE FROM $this->table WHERE isbn = :isbn");
        $this->db->bind('isbn', $isbn);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahBuku($data)
    {
        $this->db->query("UPDATE $this->table SET 
        judul=:judul,
        pengarang=:pengarang,
        penerbit=:penerbit WHERE isbn = :isbn
        ");

        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('isbn', $data['isbn']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
