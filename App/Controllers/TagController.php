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
    public function showUpdateTagForm($tagId) {
        // Retrieve tag details by ID
        $tag = $this->tagModel->getTagById($tagId);

        // Load the view for updating tags
        include '../views/update_tag.php';
    }

    public function updateTag($tagId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $result = $this->tagModel->updateTag($tagId, $name);

            if ($result > 0) {
                header("Location: ../public/index.php?action=showTags");
                exit();
            } else {
                echo "Failed to update the tag.";
            }
        }
    }

    public function deleteTag($tagId) {
    // Check if the tagId is provided
    if ($tagId !== null) {
        // Delete the tag by ID
        $result = $this->tagModel->deleteTag($tagId);

        if ($result > 0) {
            // Tag deleted successfully
            header("Location: ../public/index.php?action=showTags");
            exit();
        } else {
            // Handle failure, display an error message or redirect to an error page
            echo "Failed to delete the tag.";
        }
    } else {
        // Handle the case when tagId is not provided
        echo "Tag ID is missing";
    }
}
    
}
?>
