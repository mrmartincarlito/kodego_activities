<?php

// Create a function to calculate the new sum value of x
// When x = 10 in 5 iterations

$x = 10;

for ($i=0; $i<5; $i++) {
  echo $x += $i;
  echo '<br />';
}

echo "The new sum value of x: $x";

echo '<br />';
echo '<br />';
echo "-------------------------------";
echo '<br />';

echo "Using while loop";
echo '<br />';

getSum(8);

function getSum ($x) {
$i = 0;
while ($i < 5) {
  echo $x += $i;
  echo '<br />';

  $i++;

  }
echo "The new sum value of x: $x";
}

echo '<br />';
echo '<br />';
echo "-------------------------------";
echo '<br />';

echo "Using do while loop";
echo '<br />';

getSumDoWhile(9);

function getSumDoWhile ($x) {
  $i = 0;
  do {
    echo $x += $i;
    echo '<br />';
  
    $i++;

  } while ($i < 5);
  
  echo "The new sum value of x: $x";

} 

