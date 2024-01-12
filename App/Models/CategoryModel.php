<?php
class CategoryModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addCategory($name) {
        // Perform the database insertion to add a new category
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("INSERT INTO categories (nom) VALUES (?)");
        $stmt->execute([$name]);
    }
}
