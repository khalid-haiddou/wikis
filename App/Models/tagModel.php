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

    

    
    
}
?>
