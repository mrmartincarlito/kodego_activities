<?php

$merchandiselist=array(
    array(
        "sku"=>"0000001",
        "description"=>"Potato Chips",
        "unit"=>"PC/s",
        "price"=>25,
        "promo"=>0
    ),
    array(
        "sku"=>"0000002",
        "description"=>"Milk 500g  ",
        "unit"=>"PCK/s",
        "price"=>200,
        "promo"=>10
    ),   
    array(
        "sku"=>"0000003",
        "description"=>"RICE       ",
        "unit"=>"KG/s",
        "price"=>57,
        "promo"=>20
    ),
    array(
        "sku"=>"0000004",
        "description"=>"Cheese Ring ",
        "unit"=>"PC/S",
        "price"=>55,
        "promo"=>0
    ),
    array(
        "sku"=>"000006",
        "description"=>"SAFEGUARD    ",
        "unit"=>"PC/S",
        "price"=>99,
        "promo"=>50
    ),
    array(
        "sku"=>"0000007",
        "description"=>"SUGAR         ",
        "unit"=>"KG/s",
        "price"=>70,
        "promo"=>0
    ),
    array(
        "sku"=>"0000008",
        "description"=>"Lays           ",
        "unit"=>"PC/S",
        "price"=>85,
        "promo"=>0
    ),
    array(
        "sku"=>"0000009",
        "description"=>"Oil            ",
        "unit"=>"L/s",
        "price"=>85,
        "promo"=>0
    ),
    array(
        "sku"=>"0000010",
        "description"=>"Coke 1.5 L     ",
        "unit"=>"PC/s",
        "price"=>75,
        "promo"=>0
    ),
);

$customerBasket=array(
    Array(
    "sku"=>"0000001",
    "qty"=>3
    ),
    Array(
        "sku"=>"0000010",
        "qty"=>1
    ),
    Array(
        "sku"=>"0000003",
        "qty"=>1.5
    ),
        Array(
            "sku"=>"0000007",
            "qty"=>0.5
        ),
    Array(
            "sku"=>"0000006",
            "qty"=>5
        ), 
        Array(
            "sku"=>"0000002",
            "qty"=>1
        ),  
    );

$payment=1000;

checkOutCounter($merchandiselist,$customerBasket,$payment);

function checkOutCounter($merchandise,$basket,$cash){
echo"------------------------------------------------------------------------------------ <br>\n";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "OFFICIAL RECEIPT<br>\n";
echo"------------------------------------------------------------------------------------<br>\n";
echo '<table><thead><tr>';
echo '<th>'."QTY".'</th>';
echo '<th>'."DESCRIPTION".'</th>';
echo '<th>'."AMOUNT".'</th>';
echo '</tr></thead><tbody>';
$amountOverall=0;
$amountSub=0;
$discountTotal=0;
$itemCount=0;
    foreach($basket as $item){
        $amountTotal=0;
        $change=0;
        foreach($merchandise as $product){
            if ($item["sku"]===$product["sku"]){
                $amountTotal=$item["qty"]*$product["price"];
                $discount=0;
                echo '<tr>';

                echo '<td>';
                echo $item["qty"]." ";
                echo $product["unit"];
                echo '</td>';

                echo '<td>';
                echo $product["sku"] ."-";
                echo $product["description"]."@";
                echo number_format($product["price"],2);
                echo '</td>';

                echo '<td>';
                echo number_format($amountTotal,2);
                echo '</td>';
                echo '</tr>';
             
              
                $amountSub+=$amountTotal;
                if ($product["promo"]>0){
                    $discount=$amountTotal*($product["promo"]/100);
                    $discountTotal+= $discount;
                    echo '<tr>';

                    echo '<td>';
                    echo " ";
                    echo '</td>';

                    
                    echo '<td>';
                    echo "less";
                    echo $product["promo"]."%";
                    echo '</td>';

                    echo '<td>';
                    echo "-".number_format($discount,2) ."<br>\n";
                    echo '</td>';

                    echo '</tr>';
                }

               
                if ($product["unit"]=="KG/s"){
                    $itemCount+=1;
                }else{
                    $itemCount+=$item["qty"];
                }

            }
        }
    }
    echo '<tr>';
    echo '<td>';
    echo "---------------------";
    echo '</td>';
    echo '<td>';
    echo "--------------------------------------";
    echo '</td>';
    echo '<td>';
    echo "-------------------";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo"SUBTOTAL:";
    echo '</td>';
    echo '<td>';
    echo $itemCount ."ITEM(S)";
    echo '</td>';
    echo '<td>';
    echo number_format($amountSub,2);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "Discounted Amt:" ;
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo  number_format($discountTotal,2);
    echo '</td>';
    echo '</tr>';
    $amountOverall=$amountSub-$discountTotal;
    $vat= $amountOverall*0.12;
   
    echo '<tr>';
    echo '<td>';
    echo "VAT:";
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo  number_format($vat,2);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "TOTAL:";
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo   number_format($amountOverall,2);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "-";
    echo '</td>';
    echo '<td>';
    echo "-";
    echo '</td>';
    echo '<td>';
    echo   "-";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "CASH PAYMENT";
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo  number_format($cash,2);
    echo '</td>';
    echo '</tr>';
    $change=$cash-$amountOverall;
    echo '<tr>';
    echo '<td>';
    echo "CHANGE";
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo number_format($change,2);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "---------------------";
    echo '</td>';
    echo '<td>';
    echo "--------------------------------------";
    echo '</td>';
    echo '<td>';
    echo "-------------------";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "Cashier:0001";
    echo '</td>';
    echo '<td>';
    echo "Edson";
    echo '</td>';
    echo '<td>';
    echo  " ";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "DATE/TIME:";
    echo '</td>';
    echo '<td>';
    echo  date("Y.m.d|h:i:sa");
    echo '</td>';
    echo '<td>';
    echo  " ";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "CR No.:1234";
    echo '</td>';
    echo '<td>';
    echo  "TRANS#:000645222";
    echo '</td>';
    echo '<td>';
    echo   " ";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo "TIN NO.: ";
    echo '</td>';
    echo '<td>';
    echo "000-407-360-000";
    echo '</td>';
    echo '<td>';
    echo   " ";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo   " ";
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo "";
    echo '</td>';
    echo '<td>';
    echo   " ";
    echo '</td>';
    echo '</tr>';
    
    echo '<tr>';
    echo '<td>';
    echo " ";
    echo '</td>';
    echo '<td>';
    echo "END OF RECEIPT";
    echo '</td>';
    echo '<td>';
    echo   " ";
    echo '</td>';
    echo '</tr>';

   echo '</table>';
   
  
   echo "================================================== <br>";

   echo "THIS INVOICE/RECEIPT SHALL BE VALID FOR FIVE(5) YEARS";
}
?>