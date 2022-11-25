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
    "price" => 20
  )
);


echo "QTY &emsp; DESC &emsp; AMT &emsp; TOTAL </br>";
echo "---------------------------------------------- </br>";

$overalltotal = 0;
foreach ($groceries as $grocery) {

  $totalAmount = $grocery["qty"] * $grocery["price"];
  $overalltotal = $overalltotal + $totalAmount;
  echo "(" . $grocery["qty"] . ") &emsp; &emsp;";
  echo $grocery["item"] . "&emsp; &emsp;";
  echo $grocery["price"] . "&emsp; &emsp;";
  echo $totalAmount ."</br>";
  // echo "</br>";
}

echo "---------------------------------------------- </br>";
echo "Over all total : " . $overalltotal;
