<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1".'<br>';
}

// Without circle braces
if ($age === 20)
    echo "1".'<br>';

// Sample if-else
if ($age > 20) {
    echo "1".'<br>';
} else {
    echo "2".'<br>';
}

// Difference between == and ===
if ($age == 20) {
    echo "1".'<br>';
}

if ($age == '20') {
    echo "2".'<br>';
}

if ($age === '20') {
    echo "2".'<br>';
} else {
    echo "3".'<br>';
}

// if AND
if ($age === 20 && $salary === 300000) {
    echo "Do something".'<br>';
} else {
    echo "Do nothing".'<br>';
}

// if OR
if ($age > 20 || $salary === 300000) {
    echo "Do something".'<br>';
} else {
    echo "Do nothing".'<br>';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
// If $age exist value is $age else 18
$myAge = $age ?: '18';
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';

$myName = $name ?? 'John';

// switch

$userRole = "admin";
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'admin';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid Role';
}

?>