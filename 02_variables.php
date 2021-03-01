<?php

// What is a variable

// Variable types
/*
 * String
 * Integer
 * Float/Double
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

// Declare variables
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';
echo '<br>';

// Print the whole variable
echo var_dump($name, $age, $isMale, $height, $salary).'<br><br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo var_dump($name).'<br>';

// Variable checking functions
echo 'Is name a string? '.is_string($name).'<br>';

// Check if variable is defined
echo 'Is name defined? '.isset($name).'<br>';
echo 'Is address defined? '.isset($address).'<br>';

// Constants
define ('PI', 3.14);
echo 'PI: '.PI.'<br>';

// Using PHP built-in constants
echo 'SORT_ASC: '.SORT_ASC.'<br>';
echo 'PHP_INT_MAX: '.PHP_INT_MAX.'<br>';