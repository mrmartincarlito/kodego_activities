<?php
	$groceries = array(
    array(
      "item" => "Soap",
      "qty" => 2,
      "uom" => "PCS",
      "price" => 100.00,
      "discount" => 0
      ),
    
  array(
    "item" => "Shampoo",
    "qty" => 2,
    "uom" => "PCS",
    "price" => 35.00,
    "discount" => 0
    ),
  
  array(
    "item" => "Rice",
    "qty" => 2,
    "uom" => "KGS",
    "price" => 350.00,
    "discount" => 0
    ),
    
  array(
    "item" => "coffee",
    "qty" => 2,
    "uom" => "PCS",
    "price" => 20.00,
    "discount" => 0
    )
  );
  
  echo "------------------------------- \n";
  echo "       OFFICIAL RECEIPT \n";
  echo "------------------------------- \n";
  echo "QTY \t DESCRIPTION \t AMOUNT  \n";
  echo "------------------------------- \n";
  
  $overalltotal = 0;
  $totalitems = 0;
  foreach ($groceries as $grocery ) {
    
    $totalAmount = $grocery["qty"] * $grocery["price"];
    $overalltotal = $overalltotal + $totalAmount;
    $totalitems = $totalitems + $grocery["qty"];
    echo $grocery["qty"]; 
    echo $grocery["uom"] . "\t";
    echo $grocery["item"] ." @".$grocery["price"]."\t";
    
    echo $totalAmount . "\t";
    echo "\n";
  }
  
   echo "------------------------------- \n";
   echo "SUBTOTAL: " . $totalitems;
?>