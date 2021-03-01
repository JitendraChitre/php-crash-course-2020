<?php

// Create array
$rooms = array(); //old fashioned way
$fruits = ['apple', 'banana', 'orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';
//echo $fruits[3].'<br>'; // gives warning

// Set element by index
$fruits[0]='peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); // true
isset($fruits[3]); // false

// Append element
$fruits[] = 'apple';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits).'<br>';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruits).'<br>';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
$fruits = explode(",", $string);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Combine array elements into string
echo implode(",", $fruits).'<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
var_dump(in_array('Mango', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Apple', $fruits));
var_dump(array_search('Mango', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
echo '</pre>';

echo '<pre>';
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'Brad',
   'surname' => 'Traversy',
   'age' => 30,
   'hobbies' => ['Tennis', 'Video Games']
];
echo '<pre>';
var_dump($person);
// Alternative way of printing arrays
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
var_dump($person);
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}
echo '<pre>';
var_dump($person);
echo '</pre>';

// alternative way of doing the above
$person['address'] ??= 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
    ['title' => 'Todo title 3', 'completed' => true]
];

echo '<pre>';
print_r($todos);
echo '</pre>';

?>