<?php
require_once '../App/models/TagModel.php';

class TagController {
    private $tagModel;

    public function __construct() {
        $this->tagModel = new TagModel();
    }

    public function addTag() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            
            $result = $this->tagModel->addTag($name);

            if ($result > 0) {
                header("Location: ../Views/add_tag.php");
                exit();
            } else {
                echo "Failed to add the tag.";
            }
        }

        include '.../views/add_tag.php';
    }
    
    

    public function showTags() {
        // Retrieve all tags from the model
        $tags = $this->tagModel->getAllTags();

        // Load the view to display tags
        include '../views/show_tags.php';
    }

    
}
?>
