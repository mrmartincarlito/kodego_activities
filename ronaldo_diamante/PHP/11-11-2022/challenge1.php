<?php

// Given a sets of number (20,30,40, 8, 3)
// Compute for the over all total sums of al sets

// Output: 101

$setsOfNumbers = array(20, 30, 40, 8, 3);

$total = 0;
foreach ($setsOfNumbers as $setsOfNumber) {
    echo $setsOfNumber . '<br />';
    $total = $total + $setsOfNumber;
    
}
echo "<br />";
echo "The total sum of all sets is: " . $total;
echo "<br />";
echo "<br />";


// echo "<br />";
$setsOfNumber = 0;

for ($i = 0; $i < count($setsOfNumbers); $i++) {
    $setsOfNumber += $setsOfNumbers[$i];
}
echo "Using for loop, the total is " . $setsOfNumber;