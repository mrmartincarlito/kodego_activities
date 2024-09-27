<?php

/**
 * * Creat a function to calculate 2 given numbers based on the arithmeric operators given
 * 
 * * Scenarios:
 * * If operator is "+" add the 2 numbers print the sum
 * * If operator is "+" subtract the 2 numbers print the difference
 * * If operator is "+" multiply the 2 numbers print the product
 * * If operator is "+" divide the 2 numbers print the quotient
 * * If operator is none of the above print "operation not found"
 */


calculateGivenNumbers(50, 100, "/");

function calculateGivenNumbers($firstNumber, $secondNumber, $operator) {
    if ($operator === "+") {
        echo $firstNumber + $secondNumber;
    } else if ($operator === "-") {
        echo $firstNumber - $secondNumber;
    } else if ($operator === "*") {
        echo $firstNumber * $secondNumber;
    } else if ($operator === "/") {
        echo $firstNumber / $secondNumber;
    } else {
        echo "operation not found";
    }  
}

?>