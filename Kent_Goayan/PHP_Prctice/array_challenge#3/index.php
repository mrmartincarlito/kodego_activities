<?php
$Petergrade = array("Science"=> 95, "Math"=> 88, "Filipino"=> 97, "English"=> 90, "History"=>89);
$total = 0;
foreach ($Petergrade as $grade) {
    $total += $grade;}
  $average = $total / "5";
  echo "Total average grade is $average";
?>