<?php
class TagModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addTag($name) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("INSERT INTO tags (name) VALUES (?)");
        $stmt->execute([$name]);
        return $stmt->rowCount(); 
    }

    public function getAllTags() {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM tags");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateTag($tagId, $name) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("UPDATE tags SET name = ? WHERE id = ?");
        $stmt->execute([$name, $tagId]);

        return $stmt->rowCount(); 
    }
    
    public function getTagById($tagId) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("SELECT * FROM tags WHERE id = ?");
        $stmt->execute([$tagId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteTag($tagId) {
        $conn = $this->db->getConnection();
    
        $stmt = $conn->prepare("DELETE FROM tags WHERE id = ?");
        $stmt->execute([$tagId]);
    
        // You might want to handle success or failure here
        return $stmt->rowCount(); // Number of affected rows
    }
    
    
}
?>
