<?php

namespace app\controllers;

use app\models\User;

class UserController
{

    public function getUser() {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getUserByID('nate');
        echo json_encode($users);
        exit();
    }

    public function getAllUsers($id = null) {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsers();
//        if ($id) {
//            $users = $userModel->getUserById($id);
//        } else {
//            $users = $userModel->getAllUsers();
//        }
        echo json_encode($users);
        exit();
    }

    public function getUsersByName($name) {
        $userModel = new User();
        header("Content-Type: application/json");
        $users = $userModel->getAllUsersByName($name);
        echo json_encode($users);
        exit();
    }

    public function usersView() {
        include '../public/assets/views/user/users-view.html';
    }


}