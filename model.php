<?php

use function PHPSTORM_META\sql_injection_subst;

class Model
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "penjualan3sib";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "Koneksi Gagal" . $e->getMessage();
        }
    }

    public function fetchBarang()
    {
        $data = [];
        $query = "SELECT * FROM barang ORDER BY namaBarang";
        if ($sql = $this->conn->query($query)) {
            while ($rows = mysqli_fetch_assoc($sql)) {
                $data[] = $rows;
            }
        }
        return $data;
    }

    public function fetchPelanggan()
    {
        $data = [];
        $query = "SELECT * FROM pelanggan ORDER BY nama_pelanggan";
        if ($sql = $this->conn->query($query)) {
            while ($rows = mysqli_fetch_assoc($sql)) {
                $data[] = $rows;
            }
        }
        return $data;
    }

    public function fetchFaktur()
    {
        $data = [];
        $query = "SELECT * FROM fakturpenjualan ORDER BY namaBarang";
        if ($sql = $this->conn->query($query)) {
            while ($rows = mysqli_fetch_assoc($sql)) {
                $data[] = $rows;
            }
        }
        return $data;
    }
}
