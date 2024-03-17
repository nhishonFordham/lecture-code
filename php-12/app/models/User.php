<?php

namespace app\models;

//using the database class namespace
use app\core\Database;

class User
{
    //using the trait, bring in all of its methods
    use Database;

    public function getAllUsersByName($name) {
        //create our sql statement with a parameter

        $query = "select * from users WHERE CONCAT(firstName,' ',lastName) like :name";

        //expecting an associative array of named parameters, here we are binding values
        return $this->queryWithParams($query, ['name' => '%' . $name . '%'], 'app\models\User');
    }

    public function getFirstUser() {
        $query = "select * from users";
        return $this->fetch($query);
    }

    public function getAllUsers() {
        $query = "select * from users";
        return $this->fetchAll($query);
    }

    public function getUserById($id){
        $query = "select * from users where :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }

    public function echoYo() {
        echo 'yo';
    }
}