<?php
require_once '../App/models/CategoryModel.php';

class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }

    public function addCategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            
            $result = $this->categoryModel->addCategory($name);

            if ($result > 0) {
                header("Location: ?action=addCategory");
                exit();
            } else {
                echo "Failed to add the category.";
            }
        }

    
        include '../views/add_category.php';
    }
    public function showCategories() {
        
        $categories = $this->categoryModel->getAllCategories();

        include '../views/categories.php';
    }

    
}
?> 
