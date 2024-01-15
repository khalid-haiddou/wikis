<?php
class CategoryModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addCategory($name) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
        $stmt->execute([$name]);

        // You might want to handle success or failure here
        return $stmt->rowCount(); // Number of affected rows
    }
    
    public function getAllCategories() {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM categories");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    

    public function getCategoryById($categoryId) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$categoryId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function updateCategory($categoryId, $name) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("UPDATE categories SET name = ? WHERE id = ?");
        $stmt->execute([$name, $categoryId]);

        return $stmt->rowCount(); // Number of affected rows
    }

    public function deleteCategory($categoryId) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$categoryId]);

        // You might want to handle success or failure here
        return $stmt->rowCount(); // Number of affected rows
    }
}
?>
