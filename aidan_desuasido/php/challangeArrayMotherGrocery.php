<?php
//Nov.12.2022

//Challenge #5
//Mother's Grocery
//My Mother go to the grocery store, she bought several items with:
//1. ITEM 1, 2 pcs which cost 100
//2. ITEM 2, 7 pcs which cost 35
//3. ITEM 3, 1 pcs which cost 350
//4. ITEM 4, 2 pcs which cost 20
//Compute for the total amount she would pay with the list
//of all items she bought on a receipt type.......

//Output:
//
//QTY  DESC       AMT    Total 
//............................ 
//
//(2)ITEM 1        100     200
//(7)ITEM 2        35      245
//(1)ITEM 3        350     350
//(2)ITEM 4        20      40
//............................ 
//
//Overall Total:       Php 835

$groceryItems = array(
    "ITEM 1" => array("QTY" => 2, "COST" => 100),
    "ITEM 2" => array("QTY" => 7, "COST" => 35),
    "ITEM 3" => array("QTY" => 1, "COST" => 350),
    "ITEM 4" => array("QTY" => 2, "COST" => 20)
);
$overallTotal = 0;
 echo "Output: \n\n";
 echo "QTY  DESC       AMT    Total \n";
 echo "............................ \n\n";
foreach($groceryItems as $item => $prop){
    //foreach($prop as $key => $val){
    //echo "Item and Properties $item => $key => $val \n";
    $strQTY_DESC = "(" . $prop["QTY"] . ")" .  $item . "    ";
    $strTotal = $prop["COST"]*$prop["QTY"];
    $overallTotal += $strTotal;
    $cost = $prop["COST"];
    echo $strQTY_DESC;
    printf("    %-4s",$cost);
    echo "    " . $strTotal . "\n";
}
echo "............................ \n\n";
echo "Overall Total:       Php " . $overallTotal . "\n";
echo "\n";



?>