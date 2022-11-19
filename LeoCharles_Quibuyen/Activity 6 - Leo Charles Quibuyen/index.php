<?php


$purchases = array(
   "ice cream" => array(
        "item" => "Yogurt Ice Cream &emsp;&ensp;",
        "qty" => 20,
        "oum" => "(cup)&emsp;",
        "amt" => 30
    ),
    "yogurt" => array(
        "item" => "Flavored Yogurt &emsp;&emsp;",
        "qty" => 30,
        "oum" => "(cup)&ensp;&ensp;",
        "amt" => 25
    ),
    "plain" => array(
        "item" => "Plain Yogurt &emsp;&emsp;&emsp;&ensp;",
        "qty" => 20,
        "oum" => "(tab)&emsp;",
        "amt" => 250 
    ),
    "fruits" => array(
        "item" => "Yogurt w/ Fruits &emsp;&emsp;",
        "qty" => 10,
        "oum" => "(tab)&emsp;",
        "amt" => 280
    )
    );

        echo "-------------------------------------------------------------------------------------------------------<br>";
        echo " &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; RECEIPT<br>";
        echo "-------------------------------------------------------------------------------------------------------<br>";
        echo "ITEM &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; QTY  &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; PRICE &emsp;&emsp;&emsp;&emsp; AMOUNT <br>";
        echo "------------------------------------------------------------------------------------------------------- <br>";



    $sum = 0;
    $total = 0;
    $subtotal = 0;
    $overalltotal = 0;
    $discountpercentyogurt = 0.20;
    $discountpercentplain = 0.30;   
    $discountyogurt = 0;
    $discountplain = 0;
    
    

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("M d, Y h:i A");
   
    foreach($purchases as $purchase){
        
        $total = $purchase["amt"] * $purchase["qty"];
        $subtotal += $total;
        $total = number_format($total, 2);
        $overalltotal = $subtotal - $discountyogurt - $discountplain;
        $sum += $purchase["qty"];
        $purchase["amt"] = number_format($purchase["amt"], 2);

        $totalyogurt = $purchases["yogurt"]["amt"] * $purchases["yogurt"]["qty"];
        $totalplain = $purchases["plain"]["amt"] * $purchases["plain"]["qty"];

        $discountyogurt = $totalyogurt * $discountpercentyogurt;
        $discountplain = $totalplain * $discountpercentplain;

       
       
        echo  $purchase["item"]. "&emsp;&emsp;&emsp;" . $purchase["qty"] . $purchase["oum"] . "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $purchase["amt"] . "&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;" . $total . "<br>";
        
    }

    if ($purchase["item"] = "Flavored Yogurt" && ["qty"] >=10 ) {

    }

    if ($purchase["item"] = "Plain Yogurt" && ["qty"] >=10 ) {

    }

        echo "------------------------------------------------------------------------------------------------------ <br>";
        $subtotal = number_format($subtotal, 2);
        $discountyogurt = number_format($discountyogurt, 2);
        $discountplain = number_format($discountplain, 2);
        
        

       
        echo "Sub - Total &emsp; = &emsp;&emsp;&emsp; $sum  ITEM(s) &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; $subtotal<br>";
        echo "------------------------------------------------------------------------------------------------------- <br>";
        echo "Discount &emsp; = &emsp;&emsp; Flavored Yogurt discount (20%) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; - $discountyogurt <br>";
        echo "&emsp;&emsp;Plain Yogurt discount (30%) &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; - $discountplain <br>";
        echo "&emsp;&emsp;  <br>";
        echo "&emsp;&emsp; <br>";
        echo "------------------------------------------------------------------------------------------------------- <br>";
        $overalltotal = number_format($overalltotal, 2);
        echo "Total &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp; &#x20B1; $overalltotal <br>";
        echo "------------------------------------------------------------------------------------------------------- <br>";
        echo " <br>";
        echo " <br>";
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Cashier: Charles <br>";
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp; TRANS#:0000000010 <br>";
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; OR#:0132516545 <br>";
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; DATE/TIME: $date <br>";
        echo " <br>";
        echo " <br>";
        echo " <br>";
        echo " <br>";
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; END OF BILLING <BR>";
        echo "============================================================= <br>";
        echo "&emsp;&emsp;THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX  "






















?>
