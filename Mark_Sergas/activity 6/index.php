<?php
$groceries = array(
  array(
    "desc" => "Soap",
    "price" => 100,
    "qty" => 4,
    "uom" => "PC",
    "isBulk" => false,
    "discount" => 0
  ),

  array(
    "desc" => "Rice",
    "price" => 40,
    "qty" => 2,
    "uom" => "KG",
    "isBulk" => true,
    "discount" => 10
  ),

  array(    
    "desc" => "RedH",
    "price" => 110,
    "qty" => 2,
    "uom" => "PC",
    "isBulk" => false,
    "discount" => 5
  )
);

$total = 0;
$itemsCounter = 0;
echo "---------------------------------------------- </br>";
echo "&emsp;&emsp;OFFICIAL RECEIPT</br>";
echo "---------------------------------------------- </br>";
echo "QTY&emsp;  ITEM &emsp;&emsp;AMOUNT&emsp;&emsp;Total</br>";

foreach ($groceries as $grocery) {
  $itemTotal = $grocery["qty"] * $grocery["price"];
  echo $grocery["qty"]. " ". $grocery["uom"] . "&emsp;". $grocery["desc"] . "&emsp;&emsp;&emsp;" . "@" . $grocery["price"] . "&emsp;&emsp;&emsp;&emsp; $itemTotal</br>";
  $total = $total + $itemTotal;

  if ($grocery["isBulk"]) {
    $itemsCounter = $itemsCounter + 1; 
  }else {
    $itemsCounter = $itemsCounter  + $grocery["qty"];
  }

}
echo "---------------------------------------------- </br>";
echo "Sub Total: $itemsCounter Item(s) </br>";
echo "Overall Total: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Php " . $total . "</br>";
echo "Discount: </br>";

$accumulatedDiscount = 0;

foreach($groceries as $grocery){
  if ($grocery["discount"] > 0){
    $itemTotal = $grocery["qty"] * $grocery["price"];
    $discountPrice = ($grocery["discount"] / 100) * $itemTotal;
    $accumulatedDiscount += $discountPrice;
    echo "&emsp;&emsp;&emsp;&emsp;" . $grocery["desc"] ." @ " . $grocery["discount"] . "% &emsp;&emsp;&emsp;&emsp;&emsp; - $discountPrice</br>";
  }
}
$overAllTotal = $total - $accumulatedDiscount;
echo "Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Php " . "$overAllTotal.00"

?>
