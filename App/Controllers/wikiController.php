<?php

class WikiController {
    private $wikiModel;
    private $categoryModel;

    public function __construct() {
        $this->wikiModel = new WikiModel();
        $this->categoryModel = new CategoryModel();
    }

    public function showAddWikiForm() {
        // Fetch categories from the model
        $categories = $this->categoryModel->getAllCategories();

        // Load the view to add a new wiki with categories
        include '../views/add_wiki.php';
    }

    public function addWiki() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $title = $_POST['title'];
            $description = $_POST['description'];
            $content = $_POST['content'];
            $authorID = $_POST['authorID'];  // Replace with actual user ID
            $categoryID = $_POST['category'];

            // Add wiki to the database
            $result = $this->wikiModel->addWiki($title, $description, $content, $authorID, $categoryID);

            if ($result > 0) {
                echo "Wiki added successfully!";
            } else {
                echo "Failed to add the wiki.";
            }
        }
    }

    // Other methods in the controller...
}
