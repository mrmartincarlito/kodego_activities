<?php
/*
Create a function to calculate 2 given numbers based on the arithmetic operators given

Scenarios
1. If operator is "+" add the 2 numbers print the sum
2. If operator is "-" subtract the 2 numbers print the difference
3. If operator is "*" multiply the 2 numbers print the product
4. If operator is "/" divide the 2 number print the quotient
5. If operator is none of the above print "Operation not found"
*/


function calculate2Numbers($num1, $num2, $operator){

    if($operator == "+"){
        $sum = $num1 + $num2;
        echo  "sum = ", $sum;
    }else if($operator == "-"){
        $diff = $num1 - $num2;
        echo  "difference = ", $diff;
     }else if($operator == "*"){
        $product = $num1 * $num2;
        echo  "product = ", $product;
     }else if($operator == "/"){
        $quot = $num1 / $num2;
        echo  "quotient = ", $quot;
     }else{
        echo "Operation not found";
     }

}

calculate2Numbers(1,2,"*");



?>