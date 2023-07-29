<?php
    class Database{
        public $host = "localhost", $user = "root", $pass = "", $db="uas_sandy";
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->koneksi){
                // echo"Berhasil";
            }
            else
            {
                echo"Koneksi Database Gagal";
            }
        }
    }

    $db = new Database();

    include 'siswa.php';
?>