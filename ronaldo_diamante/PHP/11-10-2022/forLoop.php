<?php

$num1 = 3;
for($idx1 = 0; $idx1 <=5; $idx1++) {
    $num1 = $num1 + $idx1;
    // $num1 += $idx1;
}

echo $num1;
/*
$num1   $idx1   condition   movement
    3       0 <=5   Pass        3 + 0
    3       1 <=5   Pass        3 + 1
    4       2 <=5   Pass        4 + 2
    6       3 <=5   Pass        6 + 3
    9       4 <=5   Pass        9 + 4
    13      5 <=5   Pass       13 + 5   = 18
    18      6 <=5   failed

*/