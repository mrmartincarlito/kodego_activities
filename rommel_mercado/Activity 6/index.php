<?php
function pointOfSale(){

$items = array(
  array(
  "DESC" => "Shampoo",
  "MEAS" => "2PCS",
  "PRICE" => 7,
  "QTY" => 2,
  "ITM" => 2,
  "OFF" => 0
  
  ),
  
  array(
  "DESC" => "Rice",
  "MEAS" => "2KL",
  "PRICE" => 40,
  "QTY" => 2,
  "ITM" => 1,
  "OFF" => .10
  ),
  
  array(
  "DESC" => "Coffee",
  "MEAS" => "3PCS",
  "PRICE" => 20,
  "QTY" => 3,
  "ITM" => 3,
  "OFF" => .05
  ),
  
  );
  
  
  echo "------------------------------------";
  echo "\n";
  echo "QTY  DESCRIPTION       PRICE  AMOUNT";
  echo "\n";
  echo "------------------------------------";
  echo "\n";
  

  
  $subTotal = 0;
  $totalItems = 0;
  $riceDiscount = 0;
  $cofeeDiscount = 0;
  $overAllTotal = 0;

  foreach($items as $item) {
  $amount = $item["QTY"] * $item["PRICE"];
  $subTotal += $amount;
  $totalItems += $item["ITM"];
  $riceDiscount = (80 * .10);
  $cofeeDiscount = (60 * .05);
  $overAllTotal = $subTotal - $riceDiscount - $cofeeDiscount;

  
  
  echo $item["MEAS"]. "\t";
  echo $item["DESC"]. "\t" . "\t";
  echo $item["PRICE"]. "\t";
  echo $amount;
  echo "\n";
  }
  
  echo "------------------------------------";
  echo "\n";
  echo "SUB-TOTALL:   $totalItems ITEM(S)        $subTotal";
  echo "\n";
  echo "DISCOUNT:";
  echo "\n";
   echo "      Rice @ 10%                -$riceDiscount";
   echo "\n";
    echo "      Coffee @ 5%               -$cofeeDiscount";
    echo  "\n";
       echo "TOTAL:                         $overAllTotal";
        echo  "\n";
       echo "------------------------------------";
       echo  "\n";
        echo "         Cashier: Rommel";
        echo  "\n";
        echo  "TRANS#: 12346789   ORDER#: 00000001";
        echo  "\n";
        echo "          OR#: 123434234";
        echo  "\n";
        
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-y h:i:s");
    echo " DATE/TIME:     $date ";
    echo  "\n";
    echo  "\n";
    echo  "\n";
    echo "           END OF BILLING";
    echo  "\n";
    echo "=====================================";
    echo  "\n";
    echo  "      THIS IS A SAMPLE RECEIPT";
      
}

pointOfSale();
  


?>