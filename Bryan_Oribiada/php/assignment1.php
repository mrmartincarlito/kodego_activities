<?php


calculate(100,20,"+");

function calculate ($Number1, $Number2, $operator) {

    if ($operator === "+") {
        echo $Number1 + $Number2;
    }

   else if ($operator === "-") {
        echo $Number1 - $Number2;
    }

    else if ($operator === "*") {
        echo $Number1 * $Number2;
    }

    else if ($operator === "/") {
        echo $Number1 / $Number2;
    }
        else {
            echo "operation not found";
        }
}

?>

