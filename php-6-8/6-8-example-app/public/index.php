<?php
require_once "../app/models/User.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/ImageController.php";
require_once "../app/controllers/TimeController.php";

use app\controllers\UserController;
use app\controllers\ImageController;
use app\controllers\TimeController;

$uri = strtok($_SERVER["REQUEST_URI"], '?');

if ($uri === '/view-users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController = new UserController();
    $userController->usersView();
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
    $imageController->imagesView();
}

if ($uri === '/images' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageController = new ImageController();
    $imageController->saveImage();
    //send back
}

if ($uri === '/times-view' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $timeController = new TimeController();
    $timeController->dateTimesView();
}

?>


