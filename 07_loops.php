<?php

// Loop with $counter
// while
$i = 0;
while ($i < 10) {
    echo $i.'<br>';
    $i++;
}

// do - while
do {
    echo $i.'<br>';
    $i++;
} while ($i < 20);

// for
for ($i=0; $i < 5; $i++) {
    echo $i.'<br>';
}

// foreach
$myArray = [1, 2, 3, 4];
foreach ($myArray as $i => $element) {
    echo $i.' '.$element.'<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

foreach ($person as $key => $value){
    if (is_array($value)) {
        echo $key.' '. implode(',', $value).'<br>';
    } else {
        echo $key . ' '. $value .'<br>';
    }
}