<?php

// Create a function to compute for the sum of all even numbers and all odd numbers from 1 to a positve number

printSumOfEvenAndOdd(20);

function printSumOfEvenAndOdd($num) {
    $totalEven = 0;
    $totalOdd = 0;
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 == 0){
            echo "Even number:  $i" . '<br />';
            $totalEven = $totalEven + $i;
        } else {
            if ($i % 2 !== 0){
                echo "Odd number: $i" . '<br />';
                $totalOdd = $totalOdd + $i;
            }
        }
    }
    echo "The sum of even numbers is: $totalEven";
    echo '<br />';
    echo '<br />';

    echo "The sum of odd numbers is: $totalOdd";
    echo '<br />';
    echo '<br />';

    echo "The sum of all even numbers and all odd numbers: " . $totalEven + $totalOdd;
}