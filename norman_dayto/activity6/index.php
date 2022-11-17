<?php

$groceryItems = array (
  array (
    "name" => "Shampoo",
    "price" => 7,
    "qty" => 2,
    "unit" => "PC(S)",
    "discount" => 0
    ),
    
  array (
    "name" => "Rice",
    "price" => 40,
    "qty" => 2,
    "unit" => "KG(S)",
    "discount" => 0.10
    ),
  
  array (
    "name" => "Coffee",
    "price" => 20,
    "qty" => 3,
    "unit" => "PC(S)",
    "discount" => 0.05
    )
);

echo "-------------------------------------------------"."\n";
echo "         O F F I C I A L  R E C E I P T"."\n";
echo "-------------------------------------------------"."\n";
echo "QTY"."\t"."DESCRIPTION"."\t\t"."AMOUNT"."\n";

foreach ($groceryItems as $groceryItem) {
  echo $groceryItem["qty"].$groceryItem["unit"]."\t";
  echo $groceryItem["name"]." @".number_format($groceryItem["price"],2)."\t\t";
  echo $totalAmount=number_format($groceryItem["price"]*$groceryItem["qty"],2)."\n";
}

echo "-------------------------------------------------"."\n";
echo "SUB-TOTAL:"."\t";

$itemCounter=0;
foreach ($groceryItems as $itemCount) {
  if ($itemCount["unit"]=="PC(S)") {
    $itemCounter=$itemCounter+$itemCount["qty"];
    } else {
      $itemCounter=$itemCounter+1;
    }
}
echo $itemCounter." ITEM (S)"."\t";

$subTotal=0;
foreach ($groceryItems as $amountSubTotal) {
  $subTotalCounter=($amountSubTotal["price"]*$amountSubTotal["qty"]);
  $subTotal=$subTotal+$subTotalCounter;
}
echo number_format($subTotal,2)."\n";


echo "DISCOUNT:"."\n";

$discount=0;
foreach ($groceryItems as $amountDiscount) {
  if ($amountDiscount["discount"]!=0) {
    $totalPerItem=$amountDiscount["price"]*$amountDiscount["qty"];
    $discounted=$amountDiscount["discount"]*$totalPerItem;
    echo "\t".$amountDiscount["name"]." @ ".round((float)($amountDiscount["discount"])*100)."%"."\t\t"."-".number_format($discounted, 2)."\n";
    $discount=$discount+$discounted;
  }
}
echo "TOTAL:"."\t\t\t\t".number_format(($subTotal-$discount), 2)."\n";

echo "-------------------------------------------------"."\n";
echo "\t\t"."Cashier: Norman"."\n";
echo "\t"."TRANS#: 00000001"."\t"."ORDER#: 0000000234"."\n";
echo "\t\t"."OR#: 2235454934"."\n";
echo "\t"."DATE/TIME: ".$today = date("Y-m-d H:i:s")."\n\n\n";
echo "\t\t"."END OF BILLING"."\n";
echo "================================================"."\n";
echo "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX";

?>