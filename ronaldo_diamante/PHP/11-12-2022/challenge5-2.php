<?php

// My mothe go to the grocery, she bought several items with:
// ITEM 1, 2pcs which cost 100
// ITEM 2, 7pcs which cost 35
// ITEM 3, 1pc which cost 350
// ITEM 4, 2pc which cost 20

// Compute fot the total amount she would pay with the list of all items she bought on a receipt type

// Output:

// QTY  DESC    AMT     Total
// --------------------------
// (2)ITEM 1    100     200
// (7)ITEM 2    35      245
// (1)ITEM 3    350     350
// (2)ITEM 4    20      40
// --------------------------
// Overall total    Php 835

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
  

  echo "QTY  DESC  AMT  TOTAL <br />";
  echo "--------------------------- <br />";
  
  $overalltotal = 0;
  foreach ($groceries as $grocery ) {
    
    $totalAmount = $grocery["qty"] * $grocery["price"];
    $overalltotal = $overalltotal + $totalAmount;
    echo "(" . $grocery["qty"] . ")" . "\t" . $grocery["item"] . "\t" . $grocery["price"] . "\t" .  $totalAmount . "<br />";

  }

   echo "--------------------------- <br />";
   echo "Over all total : " . $overalltotal;