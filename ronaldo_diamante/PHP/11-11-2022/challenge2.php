<?php

/** 
 * Given 2sets of numbers
 * First set contains (3, 7, 9, 12, 6) and second set contains (9, 8, 6, 3, 4)
 * 
 * Compute fot the sum of the same index of the 2 sets
 * 
 * Outpu:
 * 12
 * 15
 * 15
 * 15
 * 10
 */


 $firstArray = array(3, 7, 9, 12, 6);
 $secondArray = array(9, 8, 6, 3, 4);


 for ($i=0; $i < count($firstArray); $i++) {
    echo "Index of $i = " . ($firstArray[$i] + $secondArray[$i]) . '<br />';

 }
