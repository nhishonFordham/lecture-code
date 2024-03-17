<?php
require_once "../app/core/Database.php";
require_once "../app/models/User.php";
require_once "../app/controllers/UserController.php";

use app\controllers\UserController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');


$uriArray = explode("/",$uri);
//0 => ""
//1 => users
//2 => id

if ($uriArray[1] === 'users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
//    $id = intval($uriArray[2]);
    $userController = new UserController();
    $userController->getAllUsers();
//    if ($id) {
//        $userController->getAllUsers($id);
//    } else {
//        $userController->getAllUsers();
//    }

}

if ($uri === '/users-by-name' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController = new UserController();
    $name = $_GET['name'];
    $userController->getUsersByName($name);
}

if ($uri === '/users-view' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController = new UserController();
    $userController->usersView();
}

if ($uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $userController->viewLogin();
}

?>


