<?php

class SewaModel extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->setTable('sewa');
    }

    public function getAllSewa()
    {
        $this->db->query("SELECT * FROM  {$this->getTable()}");
        return $this->db->resultSet();
    }

    public function tambahSewa($data)
    {
        $this->db->query("INSERT INTO {$this->getTable()} VALUES('', :id_anggota, :isbn, NOW(), '', 'Disewa', '5000')");

        $this->db->bind('id_anggota', $data['id_anggota']);
        $this->db->bind('isbn', $data['isbn'], PDO::PARAM_STR);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusSewa($kode_sewa)
    {
        $this->db->query("DELETE FROM {$this->getTable()} WHERE kode_sewa = :kode_sewa");
        $this->db->bind('kode_sewa', $kode_sewa);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function pengembalianSewa($data)
    {
        $this->db->query("UPDATE {$this->getTable()} SET 
        tgl_kembali = CURRENT_TIMESTAMP,
        status = 'Dikembalikan'
        WHERE kode_sewa = :kode_sewa
        ");

        $this->db->bind('kode_sewa', $data['kode_sewa']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function panelTitle()
    {
        return 'Daftar Penyewa';
    }
}
