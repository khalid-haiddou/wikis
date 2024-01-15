<?php

require_once '../App/models/CategoryModel.php';

class UpdateCategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }

    public function showUpdateForm($categoryId) {
        $category = $this->categoryModel->getCategoryById($categoryId);

        // Load the view for updating a category
        include '../views/update_category.php';
    }

    public function updateCategory($categoryId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];

            $result = $this->categoryModel->updateCategory($categoryId, $name);

            if ($result > 0) {
                // Category updated successfully, redirect to show all categories
                header("Location: ../public/index.php?action=showCategories");
                exit();
            } else {
                // Handle failure, display an error message or redirect to an error page
                echo "Failed to update the category.";
            }
        }
    }
    public function deleteCategory($categoryId) {
        // Check if the category ID is provided
        if (!isset($categoryId) || empty($categoryId)) {
            echo "Invalid category ID";
            return;
        }

        // Delete the category from the database
        $result = $this->categoryModel->deleteCategory($categoryId);

        if ($result > 0) {
            // Category deleted successfully, redirect to the categories page
            header("Location: ../public/index.php?action=showCategories");
            exit();
        } else {
            // Handle failure, display an error message or redirect to an error page
            echo "Failed to delete the category.";
        }
    }
}
