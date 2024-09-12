<?php

// Given the sets of numbers
// 3, 3, -8, -100, 20, 90, 0, -1

// Print all negative values

// Output: 
// -5
// -100
// -1

$setsOfNumbers = array(3, 3, -8, -100, -20, 90, 0, -1);
foreach ($setsOfNumbers as $set) {
    if ($set < 0) {
        echo $set . '<br />';
    }
}