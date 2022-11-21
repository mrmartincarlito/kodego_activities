<?php

// Create a function to calculate the new product value of x
// When x = 3 in 5 iterations

$x = 3;
for ($i=0; $i<5; $i++) {
    $x = $x * $i;
}
echo $x;

