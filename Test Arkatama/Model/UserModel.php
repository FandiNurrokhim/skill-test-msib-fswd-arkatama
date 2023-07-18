<?php
class User {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "msib");

        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    public function saveData($data) {
        $nama = strtoupper(mysqli_real_escape_string($this->conn, $data['nama']));
        $usia = $data['usia'];
        $kota = strtoupper(mysqli_real_escape_string($this->conn, $data['kota']));

        $sql = "INSERT INTO user (NAME, AGE, CITY, CREATED_AT) VALUES ('$nama', '$usia', '$kota', NOW())";
        $result = $this->conn->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}


?>