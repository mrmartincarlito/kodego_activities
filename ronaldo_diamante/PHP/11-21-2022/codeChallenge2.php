<?php

/**
Create a function which computes the total sum of all even numbers based on these sets 24, 57, 8, 21, 14, 7, 9

Output:

Even number : 24 
Even number : 8 
Even number : 14 
Total Sum of All Even : 46
 */


$numbers = array(24, 57, 8, 21, 14, 7, 9);

computeSumOfAllEvenNumbers($numbers);

function computeSumOfAllEvenNumbers($numbers) {
    
    $total = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            echo "Even number: $number" . '<br />';
            $total += $number;
        }
    }
    echo "Total Sum of All Even: $total";

}