<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $name = $_GET['name'];
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsersByName($name);
        echo json_encode($users);
        exit();

    }

    public function saveUser() {

        //get post data from our form post

        $name = $_POST['name'] ? $_POST['name'] : false;
        $age = $_POST['age'] ? $_POST['age'] : false;
        $email = $_POST['email'] ? $_POST['email'] : false;
        $errors = [];

        //validate and sanitize name
        if ($name) {
            //sanitize, htmlspecialchars replaces html reserved characters with their entity numbers
            //meaning they can't be run as code
            //convert double and single quotes
            //treat coe as html5
            $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

            //validate text length
            if (strlen($name) < 2) {
                $errors['nameShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }


        //numbers
        if ($age) {
            if ($age < 0 || $age > 120 || !intval($age)) {
                $errors['ageInvalid'] = 'age is invalid';
            }
        } else {
            $errors['requiredAge'] = 'age is required';
        }

        //email via regular expressions
        if ($email) {
            //regex for valid email
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (!preg_match($regex, $email)) {
                $errors['emailInvalid'] = 'email is invalid';
            }
        } else {
            $errors['emailRequired'] = 'email is required';
        }

        //if we have errors
        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }

        //we could save the data off to be saved here

        $returnData = [
            'name' => $name,
            'age' => $age,
            'email' => $email,
        ];
        echo json_encode($returnData);
        exit();

    }

    public function usersView() {
        $title = 'View Users';
        include './assets/views/users/usersView.php';
        exit();
    }

}