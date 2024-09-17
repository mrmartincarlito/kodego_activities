<?php

$groceries = array(
    array(
      "item" => "Item 1",
      "qty" => 2,
      "price" => 100
      ),
    
  array(
    "item" => "Item 2",
    "qty" => 7,
    "price" => 35
    ),
  
  array(
    "item" => "Item 3",
    "qty" => 1,
    "price" => 350
    ),
    
  array(
    "item" => "Item 4",
    "qty" => 2,
    "price" => 20)
  );
  

  echo "QTY \t DESC \t AMT \t TOTAL \n";
  echo "--------------------------- \n";
  
  $overalltotal = 0;
  foreach ($groceries as $grocery ) {
    
    $totalAmount = $grocery["qty"] * $grocery["price"];
    $overalltotal = $overalltotal + $totalAmount;
    echo "(" . $grocery["qty"] . ") \t";
    echo $grocery["item"] . "\t";
    echo $grocery["price"] . "\t";
    echo $totalAmount . "\t";
    echo "\n";
  }
  
   echo "--------------------------- \n";
   echo "Over all total : " . $overalltotal;

   ?>