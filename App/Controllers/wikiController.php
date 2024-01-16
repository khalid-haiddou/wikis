<?php
require_once '../App/models/CategoryModel.php';
require_once '../App/models/WikiModel.php';

class WikiController {
    private $wikiModel;
    private $categoryModel;

    public function __construct() {
        $this->wikiModel = new WikiModel();
        $this->categoryModel = new CategoryModel();
        $this -> tagModel = new TagModel();
    }

    public function showAddWikiForm() {
        // Fetch categories from the model
        $categories = $this->categoryModel->getAllCategories();
        $tags = $this -> tagModel ->getAllTags();
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

    public function showWikis() {
        // Fetch wikis from the model
        $wikis = $this->wikiModel->getAllWikis();
        
        // Load the view to display wikis in a table
        include '../views/wikis.php';
    }
    // Other methods in the model..
    // Other methods in the controller...
}
