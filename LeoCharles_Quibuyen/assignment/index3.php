<?php
  
  $purchases = array(
     "ITEM1" => array(
                "item" => "ITEM 1",
                "qty" => 2,
                "amt" => 100
      ),
     "ITEM2" => array(
                "item" => "ITEM 2",
                "qty" => 7,
                "amt" => 35
      ),
      "ITEM3" => array(
                "item" => "ITEM 3",
                "qty" => 1,
                "amt" => 350
      ),
      "ITEM4" => array(
                "item" => "ITEM 4",
                "qty" => 2,
                "amt" => 20
      )
     
    );
    
    echo "-----------receipt------------\n";
    echo "       QTY       Amt    Total\n";
    
  $overalltotal = 0;
  
    foreach ($purchases as $purchase){
      
      $total = $purchase["qty"] * $purchase["amt"];
      $overalltotal += $total;
      echo $purchase["item"]. "\t" . $purchase["qty"]. "\t" . $purchase["amt"] . "\t" . $total . "\n";
      
      
    }
    echo "------------------------------\n";
    
    
    echo "Over all Total--------- $overalltotal";
    
      
  
  
  
?>