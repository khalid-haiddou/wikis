<?php
class WikiModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addWiki($title, $description, $content, $authorID, $categoryID) {
        $conn = $this->db->getConnection();

        $stmt = $conn->prepare("INSERT INTO wiki (title, description, content, authorID, categorieID) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $description, $content, $authorID, $categoryID]);

        return $stmt->rowCount();
    }

    // Other methods in the model...
}
