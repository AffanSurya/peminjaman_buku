<?php

class Database
{
    private $dbh;
    private $stmt;
    private $host = "localhost";
    private $port = "3306";
    private $database = 'peminjaman_buku';
    private $user = 'root';
    private $pass = '';
    private $table;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host:$this->port;dbname=$this->database";
        $option = [
            PDO::ATTR_PERSISTENT => true, //menjaga koneksi
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function __destruct()
    {
        $this->dbh = null;
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);;
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindvalue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        try {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function single()
    {
        try {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }



    /**
     * Get the value of table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @return  self
     */
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    public function panelTitle()
    {
        echo 'Daftar';
    }
}
