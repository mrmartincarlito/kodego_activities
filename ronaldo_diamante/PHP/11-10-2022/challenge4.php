<?php

// Create a function to print all even / odd numbers from 1 to a positive number given

printEvenNumbers(10);
echo "<br>";
printOddNumbers(10);


function printEvenNumbers($num) {
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            echo "$i \n";
        }
    }
}

function printOddNumbers($num) {
    for ($i=1; $i <= $num; $i++) {
        if ($i % 2 !== 0) {
            echo "$i \n";
        }
    }
}


?>