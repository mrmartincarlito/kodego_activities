<?php


getTheSum (20, 40);
getTheDiffirence (40, 20);
getTheProduct (40, 20);
getTheQuotient (40, 20);
function getTheSum ($num1, $num2){
    $sum = $num1 + $num2;
    if ($num1 + $num2) {
        echo $sum;
    }
}

function getTheDiffirence ($num1, $num2){
    $diff = $num1 - $num2;

    if ($num1 - $num2){
        echo $diff;
    }
}

function getTheProduct ($num1, $num2){
    $product = $num1 * $num2;

    if ($num1 * $num2){
        echo $product;
    }
}

function getTheQuotient ($num1, $num2){
    $quotient = $num1 / $num2;

    if ($num1 / $num2){
        echo $quotient;
    }
}


        
    
   




?>