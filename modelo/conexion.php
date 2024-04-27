<?php
// clases/Database.php

class Database {
    private $servername = "mysql";
    private $username = "root";
    private $password = "root";
    private $database = "login";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function getAllData() {
        $sql = "SELECT * FROM usuario";
        $result = $this->conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
?>
