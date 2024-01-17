<?php

require_once '../App/models/CategoryModel.php';

class UpdateCategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }

    public function showUpdateForm($categoryId) {
        $category = $this->categoryModel->getCategoryById($categoryId);
        include '../views/update_category.php';
    }

    public function updateCategory($categoryId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];

            $result = $this->categoryModel->updateCategory($categoryId, $name);

            if ($result > 0) {
                
                header("Location: ../public/index.php?action=showCategories");
                exit();
            } else {
                echo "Failed to update the category.";
            }
        }
    }
    public function deleteCategory($categoryId) {
        if (!isset($categoryId) || empty($categoryId)) {
            echo "Invalid category ID";
            return;
        }
        $result = $this->categoryModel->deleteCategory($categoryId);

        if ($result > 0) {
            header("Location: ../public/index.php?action=showCategories");
            exit();
        } else {
            echo "Failed to delete the category.";
        }
    }
}
