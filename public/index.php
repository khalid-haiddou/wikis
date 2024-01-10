<?php

require_once '../App/models/Database.php';
require_once '../App/controllers/AuthController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'login';
$authController = new AuthController();

switch ($action) {
    case 'register':
        $authController->register();
        break;
    case 'login':
        $authController->login();
        break;
    default:
        echo "Invalid action";
        break;
}

?>
