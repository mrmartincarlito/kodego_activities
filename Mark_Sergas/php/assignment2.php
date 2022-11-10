<?php

$n = 10;
$x = 0;
$y = 0;

for ($i = 1; $i <= $n; $i++){
    if (($i % 2) == 0) {
        echo "$i </br>";
        $x = $x + $i; 
    } 
}
echo "Total even numbers is equal to $x.</br></br></br>";  
for ($j = 1; $j <= $n; $j++){
    if (($j % 2) != 0) {
        echo "$j </br>";
        $y = $y + $j;
    } 
}
echo "Total odd numbers is equal to $y.";
?>