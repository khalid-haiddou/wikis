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
        include '../views/add_wiki.php';
    }

    public function addWiki() {
        include '../views/add_wiki.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $title = $_POST['title'];
            $description = $_POST['description'];
            $content = $_POST['content'];
            $authorID = $_POST['authorID'];  
            $categoryID = $_POST['category'];

            // Add wiki to base de donnes
            $result = $this->wikiModel->addWiki($title, $description, $content, $authorID, $categoryID);

            if ($result > 0) {
                echo "Wiki added successfully!";
            } else {
                echo "Failed to add the wiki.";
            }

          
        }
    }
    public function getaddpage() {
    }

    public function showWikis() {
        // if(isset(($_GET['inp']))){
        //     $inp=$_GET['inp'];
       
            $wikis = $this->wikiModel->getAllWikis();
            
            
        
      
        include '../views/wikis.php';
    }


    public function getSearch($text){
        $getwikis = $this->wikiModel->Search_wiki($text);
        include '../views/search_page.php';    
    }
    
}
