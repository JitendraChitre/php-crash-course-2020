<?php

// What is class and instance
require_once "Person.php";
require_once "Student.php";


//$p1 = new Person();
//$p1->name = 'Brad';
//$p1->surname = 'Traversy';
// $p1->age = 30; // not allowed as age is private

$p1 = new Person('Brad', 'Traversy');
$p2 = new Person('John', 'Smith');
$p2->setAge(30);
echo '<pre>';
var_dump($p1);
var_dump($p2);
echo $p2->getAge() . '<br>';
echo Person::$counter . '<br>';
echo Person::getCounter() . '<br>';
echo '</pre>';

$s1 = new Student("Paul", "Smith", "12345");


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter

?>