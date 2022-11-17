<?php

  $products = array(
     "PRODUCT1" => array(
                  "item" => "Rice",
                  "qty-type" => "-KG",
                  "qty" => 9,
                  "price" => 50,
      ),
     "PRODUCT2" => array(
                  "item" => "Onion",
                  "qty-type" => "-KG",
                  "qty" => 7,
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
                  "qty" => 2,
                  "price" => 90,
      ),
      
      
    
    );
    
    echo "--------------------------------------------------------------\n";
    echo "                      OFFICIAL RECEIPT \n";
    echo "--------------------------------------------------------------\n";
    echo "ITEM             QTY            PRICE           AMOUNT      \n \n";
    
  $grandTotal = 0;
  $discountPercentage = 0.20;
  $subTotal = 0;
  $priceTotal = 0;
  $discount = 0;
  
    foreach ($products as $product){
      
      $priceTotal = $product["qty"] * $product["price"];
      $subTotal += $priceTotal;
      
      echo $product["item"]. "\t\t " . $product["qty"].$product["qty-type"].  "\t \t " . $product["price"] . "\t \t " . $priceTotal ."\n";
      
      $grandTotal = $subTotal - $discount;

    }
    
    echo "---------------------------------------------------------------\n";
    echo "SUB-TOTAL:                                       $subTotal \n";
    
    if ($subTotal >= 1000){
      
      $discount = $subTotal * $discountPercentage;
      $grandTotal = $subTotal - $discount;
      
      echo "DISCOUNTS:    \t You get a Discount!! \t\t 20% \n \n";
    }
    elseif ($subTotal <1000){
      
      $discount = $subTotal * $discountPercentage;
      $grandTotal = $subTotal;
      
      echo "DISCOUNTS:   Min. 1000.00 to get 20% discount!   00% \n \n";
      
    }
    
    echo "TOTAL:                                           $grandTotal \n \n";
    
    echo "---------------------------------------------------------------\n";
    echo  "                      Cashier: Jeyson \n";
    echo " \t     TRANS#:0000001   ORDER#:0000234 \n";
    echo " \t\t     OR#: 22235454934 \n\n";
    
    
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d-m-y h:i:s");
    echo "\t \t     "; echo $date; echo "\n";
   
    
    echo "\t \t      END OF BILLING \n";
    echo "================================================================\n";
    echo "\t THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX \n"
    
    
?>





