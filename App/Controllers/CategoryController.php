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
                // Category added successfully, redirect to dashboard
                header("Location: ../Views/dashboard.php");
                exit();
            } else {
                // Handle failure, display an error message or redirect to an error page
                echo "Failed to add the category.";
            }
        }

        // Load the view for adding a new category
        include '../../views/add_category.php';
    }
    public function showCategories() {
        // Retrieve all categories
        $categories = $this->categoryModel->getAllCategories();

        include '../views/categories.php';
    }

    
}
?> 
