<?php
require_once '../app/vendor/autoload.php';
require_once "../app/controllers/HomeController.php";

use app\controllers\HomeController;

$app = new HomeController();

$url = $_GET['url'];

//echo $url;


//just for example purposes
if ($url) {
    $app->getUser();
} else {
    $app->homepage();
}

