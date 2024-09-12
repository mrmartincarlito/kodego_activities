<?php

/**
 Create a function which computes the total sum of all even numbers based on the given number

Output:

Even number : 0 
Even number : 2 
Even number : 4 
Even number : 6 
Even number : 8 
Total Sum of All Even : 20
 */

computeSumOfAllEvenNumbers(8);

function computeSumOfAllEvenNumbers($num) {

    $totalEven = 0;
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 == 0){
            echo "Even number:  $i" . '<br />';
            $totalEven = $totalEven + $i;
        }
    }
    echo "Total Sum of All Even: $totalEven";

}