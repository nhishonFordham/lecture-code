<?php

class Cat {
    public string $name;
    public int $age;
    protected string $protectedString;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setProtectedString($protectedString) {
        $this->protectedString = $protectedString;
    }

    public function getProtectedString() {
        return $this->protectedString;
    }

    public function meow() {
        print('meow');
    }
}

$cat = new Cat('pinecone', 13);
//notice the arrow syntax for object properties
$cat->meow();

//$cat->name = 'pinecone';

//print($cat->name);

$cat->setProtectedString('secret');
print($cat->getProtectedString());


var_dump($cat);