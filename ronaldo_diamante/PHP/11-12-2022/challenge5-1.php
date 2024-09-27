<?php

// Given 2 sets of numbers
// Set 1 = 10, 20, 35, 70, 90
// Set 2 = 7, 20, 2, 8, 90

// Print all value with the same value of the same index

// Output:
// 20
// 90

$sets1 = array(10, 20, 35, 70, 90, 150);
$sets2 = array(7, 20, 2, 8, 90, 150);

for ($i=0; $i< count($sets1); $i++) {
    if ($sets1[$i] == $sets2[$i]) {
        echo $sets1[$i] . '<br />';
    }
}