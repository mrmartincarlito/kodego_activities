<?php

// Create a function to calculate the new quotient value of x
// When x=100 in 5 iterations exclude the 1st iteration

$x = 100;

for ($i=0; $i<5; $i++) {

    if ($i == 0) {
        continue;
    }
    $x = $x / $i;
}

echo $x;