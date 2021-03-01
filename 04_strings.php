<?php

// Create simple string
$name = 'World';
$string1 = 'Hello '.$name.'. How are you?';
$string2 = 'Hello $name. How are you?';
$string3 = "Hello $name. How are you?"; // use the string inline i.e. without concatenation
echo $string1.'<br>';
echo $string2.'<br>';
echo $string3.'<br>';

// String concatenation
echo 'Hello '. ' friend !!!'.'<br>';

// String functions

$str = "       Hello World       ";

echo "1 - ". strlen($str). '<br>';
echo "2 - ". trim($str). '<br>';
echo "3 - ". ltrim($str). '<br>';
echo "4 - ". rtrim($str). '<br>';
echo "5 - ". str_word_count($str). '<br>';
echo "6 - ". strrev($str). '<br>';
echo "7 - ". strtoupper($str). '<br>';
echo "8 - ". strtolower($str). '<br>';
echo "9 - ". ucfirst($str). '<br>';
echo "10 - ". lcfirst($str). '<br>';
echo "11 - ". ucwords($str). '<br>';
echo "12 - ". strpos($str, 'world'). '<br>';
echo "13 - ". stripos($str, 'world'). '<br>';
echo "14 - ". substr($str, 8, 6). '<br>';
echo "15 - ". str_replace('world', 'PHP', $str). '<br>';
echo "16 - ". str_ireplace('world', 'PHP', $str). '<br>';

// Multiline text and line breaks
$longText = "
    This is a <b>multiline</b>
    text
    and it goes on 
    and on
    and on
 ";

echo $longText.'<br>'; // prints without line break, because HTML treats new-line as white-space
echo nl2br($longText).'<br>'; // prints and preserves line breaks

// Multiline text and reserve html tags
echo htmlentities($longText).'<br>'; // prints and preserves html tags
echo nl2br(htmlentities($longText)).'<br>'; // prints and preserves html tags

echo html_entity_decode("&lt;b&gt;Hello&lt;/b&gt;")

// https://www.php.net/manual/en/ref.strings.php

?>