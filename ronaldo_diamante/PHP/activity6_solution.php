<?php
$groceries = array( 
  array(      
    "name" => "ITEM 1",      
    "cost" => 100,      
    "qty" => 2,
    "uom" => "PC",  // Unit of measurement
    "isBulk" => false,
    "discount" => 0
  ),        
  array(      
    "name" => "ITEM 2",      
    "cost" => 35,      
    "qty" => 7    ,
    "uom" => "KG", 
    "isBulk" => true,
    "discount" => 10 //percentage
  ),        
  array(      
    "name" => "ITEM 3",      
    "cost" => 350,      
    "qty" => 1   ,
    "uom" => "PC",
    "isBulk" => false,
    "discount" => 0
    ),        
    array (      
      "name" => "ITEM 4",      
      "cost" => 20,      
      "qty" => 2  ,
      "uom" => "box",
      "isBulk" => true,
      "discount" => 5
      )  ,
      
      array (      
      "name" => "ITEM 5",      
      "cost" => 5,      
      "qty" => 3  ,
      "uom" => "box",
      "isBulk" => true,
      "discount" => 2
      )  
  );
  
  
$total = 0; 
$itemsCounter = 0;
echo "QTY      DESC    AMT    Total<br />";  
echo "-------------------------- <br />";  
foreach($groceries as $grocery) {    
  $itemTotal = $grocery["qty"] * $grocery["cost"];    
  echo $grocery["qty"]. " ". $grocery["uom"] ."\t". $grocery["name"] . " @ " . number_format($grocery["cost"], 2) . "\t" . number_format($itemTotal, 2). "<br />";    
  $total = $total + $itemTotal; 
  
  if ($grocery["isBulk"]) {
    $itemsCounter = $itemsCounter + 1;
  } else {
    $itemsCounter = $itemsCounter + $grocery["qty"];
  }
  
}    
echo "--------------------------- <br />";  
echo "Sub Total:  $itemsCounter Items(s) " . number_format($total, 2) . "<br />";
echo "Discount: <br />";

$accumulatedDiscount = 0;

foreach($groceries as $grocery) {
  if ($grocery["discount"] > 0) {
    $itemTotal = $grocery["qty"] * $grocery["cost"];    
    $discountPrice = ($grocery["discount"] / 100) * $itemTotal;
    $accumulatedDiscount += $discountPrice;
    echo "\t" . $grocery["name"] ." @ " . number_format($grocery["discount"],2 ) . "%   - " . number_format($discountPrice, 2) . "<br />";
  }
}

$overAllTotal = $total - $accumulatedDiscount;
echo " Total                  ". number_format($overAllTotal, 2);

?>