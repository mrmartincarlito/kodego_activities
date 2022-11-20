<?php
		$groceries = array(
	  array(
	    "item" => "Coffee",
	    "price" => 70,
	    "qty" => 2,
	    "disc" => 0
	   ),
	   array(
	     "item" => "Sugar",
	     "price" => 50,
	     "qty" => 3,
	     "disc" => 10
	   ),
	   array(
	     "item" => "Milk",
	     "price" => 50,
	     "qty" => 4,
	     "disc" => 0
	   ),
	   array(
	     "item" => "Rice",
	     "price" => 60,
	     "kg" => 5,
	     "disc" => 10
	   ),
	   array(
	     "item" => "Cookies",
	     "price" => 60,
	     "qty" => 4,
	     "disc" => 5
	   ),
	   array(
	     "item" => "Candy",
	     "price" => 150,
	     "qty" => 2,
	     "disc" => 0
	   )
	 );
	
	echo "-------------------------------------- \n";
	echo "            OFFICIAL RECEIPT          \n";
	echo "-------------------------------------- \n";
  echo "QTY     DESCRIPTION             AMOUNT \n";
	
	$total = 0;
	$discountedItems = [];
	$totalItems = 0;
	$subTotal = 0;
	$amountDisc = 0;
	foreach ($groceries as $grocery) {
	    if (array_key_exists("kg", $grocery)) {
	      $amount = $grocery["price"] * $grocery["kg"];
	      echo $grocery["kg"] ." KG" . "\t";
	      $totalItems = $totalItems + 1;
	    }
	    else {
	      $amount = $grocery["price"] * $grocery["qty"];
	      echo $grocery["qty"] . " PCS" . "\t";
	      $totalItems = $totalItems + $grocery["qty"];
	    }
	    if (in_array("disc", $grocery) > 0) {
	      array_push ($discountedItems, $grocery["item"]);
	      $amountDisc = $amount * $grocery["disc"] * .01;
	    }
	  $price = $grocery["price"];
	  $subTotal = $subTotal + $amount;
	  $totalItems = $totalItems;
	  echo $grocery["item"] . " @" . number_format($price, 2) . "\t\t";
	  echo number_format($amount, 2) . "\n";
	  }
	echo "-------------------------------------- \n";
	echo "SUB-TOTAL:  " .  $totalItems . " ITEM(S)        " . number_format($subTotal, 2) . "\n";
  echo "DISCOUNT:" . "\n";
  foreach ($discountedItems as $discountedItem) {
  echo "\t" . $discountedItem . "\t\t" . "-" . $amountDisc . "\n";
  }
?> 