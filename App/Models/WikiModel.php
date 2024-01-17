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
    public function getAllWikis() {
        $conn = $this->db->getConnection();
    
        $stmt = $conn->prepare(
            "SELECT w.*, u.username as author, c.name as category FROM wiki w 
            LEFT JOIN users u ON w.authorID = u.id
            LEFT JOIN categories c ON w.categorieID = c.id"
            );
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
   

    public function Search_wiki($text){
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare (
         
            "SELECT * FROM wiki JOIN categories ON wiki.categorieID = categories.id WHERE wiki.title LIKE :title OR categories.name LIKE :category;" 
         
        );   
        $var1 = "%".$text."%";
        $stmt->bindParam(":title", $var1, PDO::PARAM_STR);
        $stmt->bindParam(":category", $var1, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


//bindparam 
