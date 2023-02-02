<?php
$x = 20;
$evenSum = 0;
$oddSum = 0;
for ($i=1; $i<=$x; $i++) {
    if ($i % 2 === 0) {
      echo $i ."\n";
      $evenSum = $evenSum + $i;
    } 
  }
 echo "Total Even: $evenSum" . "\n\n"; 


for ($i=1; $i<=$x; $i++) {
    if ($i % 2 !== 0) {
    echo $i ."\n";
    $oddSum = $oddSum + $i;
    }
  }
  echo "Total Odd: $oddSum";
?>