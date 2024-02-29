<?php

//upper lower case, basic string functions
$name = 'Pinecone';

//echo strtolower($name);

//echo strtoupper($name);

//echo strlen($name);

//finding characters in a string
//echo strpos($name, 'cone');

//mutating strings
//echo str_replace('cone', 'test', $name);

//regular expressions
//todo
//echo preg_replace('/[A-Z]/','V', $name);

//numbers
//echo sqrt(9);

//arrays
$array = ['pinecone', 'nathan'];
//echo in_array('pinecone', $array);

//array mutate
array_push($array, 'pinecone2');
//var_dump($array);

//sorting
//sort($array);
//var_dump($array);


//constants
//a constant is a name/value pair that acts like a varible
//once it is set it cannot be changed
//little different than in JS, is more used for config type piece of data
define('SITE_NAME', 'Pinecones\'s Tuna Store');
echo SITE_NAME;

?>