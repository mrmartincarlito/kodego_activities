<?php

$pointOfSale = array(
  array(
    "quantity" => "2",
    "description" => "ITEM 1",
    "amount" => 100
  ),  
  array(
    "quantity" => "2",
    "description" => "ITEM 2",
    "amount" => 35
  ),
  array(
    "quantity" => "2",
    "description" => "ITEM 3",
    "amount" => 350
  ),
  array(
    "quantity" => "2",
    "description" => "ITEM 4",
    "amount" => 20
  )
);
echo "---------------------------------------------------------- </br> ";
echo "QTY &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
echo "DESC &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
echo "AMT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
echo "Total</br>";

foreach ($pointOfSale as $key => $value) {
  echo "Index -> " . $key . "\n"; 

  if ($value["quantity"] >= 5000) {
    echo "Name of Employee       " . $value["name"] . "\n";
    echo "Job Title \t " . $value["jobTitle"] . "\n";
    echo "Salary \t " . $value["salary"] . "\n";
    
    echo "------------------------------\n";
  }
}
?>