<?php

 echo"QTY     Item   Amount   Total \n---------------------------------\n";
	$average= 0;
	$groceryStore = array (
   
	 array (  "quantity" => 5,
	           "product" => "Item1",
	           "amount" => 100 ),
	           
	  array ( "quantity" => 7,
	           "product" => "Item2",
	           "amount" => 35 ),
	           
	   array ( "quantity" => 1,
	           "product" => "Item3",
	           "amount" => 350 ),
	                        
	   array ( "quantity" => 2,
	           "product" => "Item4",
	           "amount" => 20 )
	 
	                        );
	                       
 
  foreach($groceryStore as $store) {
  
   $totalItem = $store["amount"] * $store["quantity"]; 
   $average += $totalItem;
 
    echo $store["quantity"]."\t" .$store["product"]."\t" . $store["amount"]."\t $totalItem\n";

  }
  echo "---------------------------------\n";
 
  
echo "Total Bill Amount : $average\nThank you for Shopping!";

?>
