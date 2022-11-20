<?php


	$groceryStore = array (
   
	 array (  "quantity" => 2,
	           "product" => "Lotion",
	           "amount" => 100.48 ,
	           "discounted" => 0,
	           "weight" => "pcs" ), 
	           
	  array ( "quantity" => 8,
	           "product" => "Soap     ",
	           "amount" => 25,
	          "discounted" => 0,
	          "weight" => "pcs" ),
	           
	   array ( "quantity" => 3,
	           "product" => "rice     ",
	           "amount" => 50,
	           "discounted" => 0 ,
	           "weight" => "kg"), 
	             
	   array ( "quantity" => 1,
	           "product" => "keyboard",
	           "amount" => 350,
	           "discounted" => 10,
	           "weight" => "pcs" )
	 
	                        );
	    
	    echo"QTY       Item          Amount          Total \n-------------------------------------------------\n";
	   
	$average = 0;                    
  $subtotal = 0;
  $div = 100;

  
  foreach($groceryStore as $store) {
  $discount1 = $store["discounted"] / $div;
  $discount2 = $discount1 * $store["amount"];

    $subtotal = $store ["quantity"] + $subtotal;
    $totalItem = $store["amount"] * $store["quantity"]; 
    
    $totalItem = number_format($totalItem, 2);
    $average = number_format($average, 2);
    
    $average += $totalItem;
    $All = $average - $discount2;


      echo "(".$store["quantity"]. $store["weight"].")\t  ";
      echo $store["product"]."\t";
      echo $store["amount"]. "\t        ";
      echo $totalItem. "\n";
  
  }
  echo "-------------------------------------------------\n";
 
    echo "Sub-Total: $subtotal ITEM";
    echo "(s)" ."\t       ";
    echo "Amount:  $average\n\n";
    echo "DISCOUNT: \n";
    echo "   keyboard @20% \t\t\t   -$discount2 \n\n";
    echo "TOTAL AMOUNT : \t\t\t        $All \n";
    
    echo "-------------------------------------------------\n";
    echo "\t          Cashier: Bryan\n";
    echo "     TRANS#: 00000058   ORDER#: 00000005823\n";
    echo "\t          OR#: 340987381\n";
    
    echo "\t    DATE/TIME:2022-11-17 19:01:58\n\n";
    echo "\t           END OF BILLING\n"; echo "=================================================\n";
    echo "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX";
    
?>