<?php

  $products = array(
     "PRODUCT1" => array(
                  "item" => "Rice",
                  "qty-type" => "-KG",
                  "qty" => 10,
                  "price" => 50.000,
      ),
      
     "PRODUCT2" => array(
                  "item" => "Onion",
                  "qty-type" => "-KG",
                  "qty" => 9,
                  "price" => 10,
      ),
      "PRODUCT3" => array(
                  "item" => "Chips",
                  "qty-type" => "-PCK",
                  "qty" => 1,
                  "price" => 10,
      ),
      "PRODUCT4" => array(
                  "item" => "Toy",
                  "qty-type" => "-PCS",
                  "qty" => 2,
                  "price" => 20,
      ),
      "PRODUCT5" => array(
                  "item" => "Dog",
                  "qty-type" => "-PCS",
                  "qty" => 9,
                  "price" => 105,
      ),
      "PRODUCT6" => array(
                  "item" => "Sugar",
                  "qty-type" => "-KG",
                  "qty" => 10,
                  "price" => 90,
      ),
      
      
    
    );
    
    echo "--------------------------------------------------------------\n";
    echo "                      OFFICIAL RECEIPT \n";
    echo "--------------------------------------------------------------\n";
    echo "ITEM             QTY            PRICE           AMOUNT      \n \n";
    
  $riceDiscountPercentage = 0.10;
  $onionDiscountPercentage = 0.20;
  $riceDiscount = 0;
  $onionDiscount = 0;
  
  $grandTotal = 0;
  $subTotal = 0;
  $priceTotal = 0;
  $sum = 0;

  $riceDiscount = 0;
  $onionDiscount = 0;

  
  $riceTotalAmount = 0;
  $riceTotal = 0;
  
  
    foreach ($products as $product){
      
      $priceTotal = $product["qty"] * $product["price"];
      $riceTotal =  $products ["PRODUCT1"] ["qty"] * $products ["PRODUCT1"] ["price"];
      $onionTotal =  $products ["PRODUCT2"] ["qty"] * $products ["PRODUCT2"] ["price"];
      $subTotal += $priceTotal;
      number_format($riceDiscount, 2);
      
      $sum += $product["qty"];
      echo $product["item"]. "\t\t " . $product["qty"].$product["qty-type"].  "\t \t " . $product["price"] . "\t \t " . $priceTotal ."\n";
      
      $grandTotal = $subTotal - $riceDiscount;

    }
    
    echo "---------------------------------------------------------------\n";
    echo "SUB-TOTAL:       $sum ITEM(s)                      $subTotal \n\n";
    
      //rice discount condition//
      if ( $product["item"] = "Rice" && $products ["PRODUCT1"] ["qty"] >=5 ){
        
        $riceDiscount = $riceTotal * $riceDiscountPercentage;
        $grandTotal = $subTotal - $riceDiscount;
        
        echo   "DISCOUNTS: \t @Rice 10%             \t\t $riceDiscount \n";
      }
      
       //rice discount condition//
      if ( $product["item"] = "Onion" && $products ["PRODUCT2"] ["qty"] >=5 ){
        
        $onionDiscount = $onionTotal * $onionDiscountPercentage;
        $grandTotal = $subTotal - $riceDiscount - $onionDiscount;
        
        echo   "\t\t @Onion 20%               \t $onionDiscount \n\n";

      }
    
    
    
    
  
    
    echo "TOTAL:                                           $grandTotal \n \n";
    
    echo "---------------------------------------------------------------\n";
    echo  "                       Cashier: Jey \n";
    echo " \t     TRANS#:0000001   ORDER#:0000234 \n";
    echo " \t\t     OR#: 22235454934 \n\n";
    
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("d-m-y h:i:s");
    echo "\t \t     "; echo $date; echo "\n";
   
    
    echo "\t \t      END OF BILLING \n";
    echo "================================================================\n";
    echo "\t THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX \n"
    
    
 

    
?>