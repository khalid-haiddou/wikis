<?php

require_once '../App/models/Database.php';
require_once '../App/controllers/AuthController.php';
require_once  '../App/controllers/CategoryController.php';
require_once  '../App/controllers/UpdateCategoryController.php';
require_once  '../App/controllers/TagController.php';


$action = isset($_GET['action']) ? $_GET['action'] : 'login';
$authController = new AuthController();
$CategoryController = new CategoryController();
$updateCategoryController = new UpdateCategoryController();
$tagController = new TagController();
switch ($action) {
    case 'register':
        $authController->register();
        break;
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'addCategory':
        $CategoryController->addCategory();
        break;
    case 'showCategories':
        $CategoryController->showCategories();
        break;
    case 'showUpdateForm':
        $updateCategoryController->showUpdateForm($_GET['categoryId']);
        break;
    case 'updateCategory':
        $updateCategoryController->updateCategory($_GET['categoryId']);
        break;
    case 'deleteCategory':
        $updateCategoryController->deleteCategory($_GET['categoryId']);
        break;
    case 'addTag':
        $tagController->addTag(); 
        break;  
    case 'showTags':
        $tagController->showTags();
        break;                                                                                                                                                
    default:
        echo "Invalid action";
        break;
}

?>
