<?php

namespace app\controllers;
class HomeController
{

    function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__);
        $loader->addPath('../public/assets/views', $namespace = '__main__');
        $this->twig = new \Twig\Environment($loader);
    }

    public function getUser()
    {

        //imagine this is coming from a database
        $userData = [
            'firstName' => 'pinecone',
            'lastName' => 'hishon'
        ];

        echo json_encode($userData);
    }

    public function homepage()
    {
        //imagine this is coming from a database
        $template = $this->twig->load('homepage.twig');
        $homepageData = [
            'title' => 'Title data from back end'
        ];

        echo $template->render($homepageData);
    }

}