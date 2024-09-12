<?php

$groceries = array(
    array(
        "item" => "Asin",
        "qty" => 2,
        "cost" => 100,
        "uom" => "kg",
        "isBulk" => true,
        "discount" => 2,
      ),
    
    array(
        "item" => "suka",
        "qty" => 3,
        "cost" => 35,
        "uom" => "li",
        "isBulk" => false,
        "discount" => 0,
        ),
    
    array(
        "item" => "Bigas",
        "qty" => 1,
        "cost" => 350,
        "uom" => "pc",
        "isBulk" => false,
        "discount" => 0,
        ),
        
    array(
        "item" => "Kalamay",
        "qty" => 2,
        "cost" => 20,
        "uom" => "box",
        "isBulk" => false,
        "discount" => 3,
    ),

    array(
        "item" => "Kape",
        "qty" => 3,
        "cost" => 5,
        "uom" => "box",
        "isBulk" => true,
        "discount" => 8,
    ),
  );
  

  echo "QTY  DESC AMT TOTAL <br />";
  echo "------------------------------------ <br />";
  
  $total = 0;
  $itemsCounter = 0;

  foreach ($groceries as $grocery ) {
    
    $totalAmount = $grocery["qty"] * $grocery["cost"];
    echo $grocery["qty"] . $grocery["uom"] . " -- " . $grocery["item"] . " @ " . number_format($grocery["cost"], 2) . " -- " . number_format($totalAmount, 2)  . "<br />";
    $total = $total + $totalAmount;

    if ($grocery["isBulk"]) {
        $itemsCounter = $itemsCounter + 1;
    } else {
        $itemsCounter = $itemsCounter + $grocery["qty"];
    }

  }
  
   echo "------------------------------------ <br />";
   echo "Sub Total:  $itemsCounter Items(s) ". number_format($total, 2). "<br />";
   echo "<br />";

  $accumulatedDiscount = 0;
   foreach ($groceries as $grocery) {
        if ($grocery["discount"] > 0) {
            $totalAmount = $grocery["qty"] * $grocery["cost"];
            $discountedPrice = ($grocery["discount"] / 100) * $totalAmount;
            $accumulatedDiscount += $discountedPrice;
            echo $grocery["item"] . " @ " . number_format($grocery["discount"], 2)  . "% - ".  number_format($discountedPrice, 2) . "<br />";
        }

   }
   echo "------------------------------------ <br />";

   $overAllTotal = $total - $accumulatedDiscount;
   echo "Total ".  number_format($overAllTotal, 2);

?>