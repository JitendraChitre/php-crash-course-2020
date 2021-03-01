<?php

// Function which prints "Hello I am Zura"
function hello() {
    echo "Hello I am Zura";
}
echo hello() . '<br>';

// Function with argument
function hello2($name) {
    echo "Hello I am $name";
}
echo hello2("your friend.") . '<br>';

// Create sum of two functions
function sum($a, $b) {
    return $a + $b;
}
echo sum(4, 5) . '<br>';

// Create function to sum all numbers using ...$nums

function sumN(...$nums) {
    $sum = 0;
    foreach ($nums as $i => $num) {
        $sum += $num;
    }
    return $sum;
}
echo sumN(4, 5, 3, 2, 6, 7, 8, 9) . '<br>';

// Arrow functions
function sumA(...$nums) {
    $sum = array_reduce($nums, fn($carry, $num) => $carry + $num);
    return $sum;
}
echo sumA(4, 5, 3, 2, 6, 7, 8, 9) . '<br>';
 ?>