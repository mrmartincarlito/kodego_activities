<?php


getTheTotal("40" , "20");
function getTheTotal ($num1, $num2){
    $sum = $num1 + $num2;
    $dif = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient = $num1 / $num2;
    if ($num1 + $num2) {
        echo $sum;
    }
    else if ($num1 - $num2) {
        echo $dif;
    }
    else if ($num1 * $num2) {
        echo $product;
    }
    else if ($num1 / $num2) {
        echo $quotient;
    }
        
    
   
}



?>