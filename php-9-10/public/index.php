<?php
require_once "../app/models/User.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/ImageController.php";

use app\controllers\UserController;
use app\controllers\ImageController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');

if ($uri === '/view-users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController = new UserController();
    $userController->viewUsers();
}

if ($uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController = new UserController();
    $userController->getUsers();
}

if ($uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $userController->saveUser();
}

if ($uri === '/images-view' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $imageController = new ImageController();
    $imageController->viewImages();
}

if ($uri === '/images' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageController = new ImageController();
    $imageController->saveImage();
    //send back
}

?>


