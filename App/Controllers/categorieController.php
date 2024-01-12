<?php
class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new CategoryModel();
    }

    public function create() {
        // Check if the user is an admin (modify this condition based on your authentication system)
        if ($_SESSION['role'] === 'admin') {
            // Load the create view
            include '../views/Createcategories.php';
        } else {
            // Redirect or show an error message for permission denial
            header("Location: ?action=permissionDenied");
            exit();
        }
    }

    public function store() {
        // Check if the user is an admin (modify this condition based on your authentication system)
        if ($_SESSION['role'] === 'admin') {
            // Process the form submission to add a new category
            $name = $_POST['name'];
            
            if (!empty($name)) {
                $this->categoryModel->addCategory($name);

                // Redirect to a success page or back to the create page
                header("Location: ?action=categoryCreated");
                exit();
            } else {
                // Handle validation errors or show an error message
                header("Location: ?action=create&error=invalidData");
                exit();
            }
        } else {
            // Redirect or show an error message for permission denial
            header("Location: ?action=permissionDenied");
            exit();
        }
    }
}
