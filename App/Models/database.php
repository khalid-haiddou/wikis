<?php

class Database {
    private $host;
    private $dbName;
    private $user;
    private $password;
    private $conn;

    public function __construct() {
        require_once('../config/config.php');

        $this->host = DB_HOST;
        $this->dbName = DB_NAME;
        $this->user = DB_USER;
        $this->password = DB_PASSWORD;

        $this->connect();
    }

    private function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
