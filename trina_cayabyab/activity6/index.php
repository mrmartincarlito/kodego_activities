<?php
$groceries = array( 
  array(      
    "name" => "ITEM 1",      
    "cost" => 150,      
    "qty" => 2,
    "uom" => "PC",
    "isBulk" => false,
    "discount" => 0
  ),        
  array(      
    "name" => "ITEM 2",      
    "cost" => 45,      
    "qty" => 7    ,
    "uom" => "KG",
    "isBulk" => true,
    "discount" => 10 //percentage
  ),        
  array(      
    "name" => "ITEM 3",      
    "cost" => 400,      
    "qty" => 1   ,
    "uom" => "PC",
    "isBulk" => false,
    "discount" => 0
    ),        
    array (      
      "name" => "ITEM 4",      
      "cost" => 35,      
      "qty" => 2  ,
      "uom" => "box",
      "isBulk" => true,
      "discount" => 5
      )  ,
      
      array (      
      "name" => "ITEM 5",      
      "cost" => 10,      
      "qty" => 3  ,
      "uom" => "box",
      "isBulk" => true,
      "discount" => 2
      )  
  );
  
  
  $total = 0; 
  $itemsCounter = 0;
  echo "QTY      DESC    AMT    Total\n";  
  echo "-------------------------- \n";
  for ($i = 0; $i < count($groceries); $i++) {
    $grocery = $groceries[$i];
    $itemTotal = $grocery["qty"] * $grocery["cost"];    
    echo "(" . $grocery["qty"]. ") ". $grocery["uom"] ."\t". $grocery["name"] . " @ " . number_format($grocery["cost"], 2) . "\t" . number_format($itemTotal, 2). "\n";    
    $total = $total + $itemTotal; 
    
    if ($grocery["isBulk"]) {
      $itemsCounter = $itemsCounter + 1;
    } else {
      $itemsCounter = $itemsCounter + $grocery["qty"];
    }
  }
  
  echo "--------------------------- \n";  
  echo "Sub Total:  $itemsCounter Items(s) " . number_format($total,2) . "\n";
  echo "Discount: \n";
  
  $accumulatedDiscount = 0;
  
  for ($i = 0; $i < count($groceries); $i++) {
    $grocery = $groceries[$i];
    if ($grocery["discount"] > 0){
      $itemTotal = $grocery["qty"] * $grocery["cost"];  
      $discountPrice = ($grocery["discount"] / 100) * $itemTotal;
      $accumulatedDiscount += $discountPrice;
      echo "\t" . $grocery ["name"] ." @ ". number_format($grocery["discount"], 2) . "%  - " . number_format($discountPrice, 2). "\n";
    }
  }
  
  $overAlltotal = $total - $accumulatedDiscount;
  echo " Total                   " . number_format($overAlltotal,2);
  echo "\n ---------------------------------------------\n";
  echo "            Cashier: Trina \n";
  echo "   TRANS#: 00000001  ORDER#: 0000000234" ."\n";
  echo "            OR#: 2235454934";
  echo "\n    DATE/TIME: 2022-11-13 23:27:50 \n";
  echo "          END OF BILLING \n";
  echo "================================================";
  echo "\n THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX";
  
?>

