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
        $tags = $this->tagModel->getAllTags();

        include '../views/show_tags.php';
    }
    public function showUpdateTagForm($tagId) {
        $tag = $this->tagModel->getTagById($tagId);
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
    if ($tagId !== null) {
        $result = $this->tagModel->deleteTag($tagId);

        if ($result > 0) {
            header("Location: ../public/index.php?action=showTags");
            exit();
        } else {
            echo "Failed to delete the tag.";
        }
    } else {
        echo "Tag ID is missing";
    }
}
    public function statistics() {
        // echo 'work';
        // die();
        $result = $this->tagModel->statistics();
        $tag = $this->tagModel->statisticstag();
        $category = $this->tagModel->statisticscategory();

 require("../Views/dashboard.php");
}
    
}
?>
