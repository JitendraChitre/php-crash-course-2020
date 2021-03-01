<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a = $a + $b; echo $a. '<br>';
$a -= $b; echo $a. '<br>';
$a *= $b; echo $a. '<br>';
$a /= $b; echo $a. '<br>';

// Increment operator
echo $a++  .  '<br>';
echo ++$a  .  '<br>';

// Decrement operator
echo $a--  .  '<br>';
echo --$a  .  '<br>';

// Number checking functions
is_float(1.25) . '<br>';
is_double(1.25) . '<br>';
is_int(1.25) . '<br>';
is_numeric("3.45") . '<br>';
is_numeric("3.45g") . '<br>';

// Conversion
$strNumber = '12.34';

$floatNumber = (float) $strNumber;
var_dump($floatNumber);
echo '<br>';

$intNumber = (int) $strNumber;
var_dump($intNumber);
echo '<br>';

$floatNumber = floatval($strNumber);
var_dump($floatNumber);
echo '<br>';

$intNumber = intval($strNumber);
var_dump($intNumber);
echo '<br>';

// Number functions

echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2, 3) " . pow(2, 3). '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "sqrt(-16) " . sqrt(-16) . '<br>';
echo "max(2, 9, 3) " . max(2, 9, 3) . '<br>';
echo "min(2, 9, 3) " . min(2, 9, 3) . '<br>';
echo "round(2.3) " . round(2.3) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, ',', ' ') . '<br>' ;
echo number_format($number, 2, '.', ',') . '<br>' ;

// https://www.php.net/manual/en/ref.math.php
