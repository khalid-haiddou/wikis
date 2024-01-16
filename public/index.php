<?php

require_once '../App/models/Database.php';
require_once '../App/Controllers/AuthController.php';
require_once  '../App/Controllers/CategoryController.php';
require_once  '../App/Controllers/UpdateCategoryController.php';
require_once  '../App/Controllers/TagController.php';
require_once  '../App/Controllers/WikiController.php';


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
    case 'showUpdateTagForm':
        $tagController->showUpdateTagForm($_GET['tagId']);
        break;
    case 'updateTag':
        $tagController->updateTag($_GET['tagId']);
        break;    
    case 'deleteTag':
        $tagController->deleteTag($_GET['tagId']);
        break;   
    case 'addWiki':
        $wikiController->addWiki();
        break;                                                                                                                                       
    default:
        echo "Invalid action";
        break;
}

?>
