<?php

// Given the setsOfNumbers
// 35, -9, 400, 78, 300, 200, 1500
// Print the large number

// Output: 1500

$setsOfNumbers = array(35, -9, 4400, 78, 300, 200, 1500);
$largeNumber = 0;
for ($i=0; $i < count($setsOfNumbers); $i++) {
    if ($setsOfNumbers[$i] > $largeNumber) {
        $largeNumber = $setsOfNumbers[$i];
    }
}
echo $largeNumber. '<br />';
