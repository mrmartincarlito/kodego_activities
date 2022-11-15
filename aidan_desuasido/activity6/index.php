<?php
//Activity 6 Coding Challenge
//Grocery store checkout counter
$groceryItems = array(
    "Product1" => array(
        "name" => "Shampoo",
        "qty"  => 2,
        "price" => 7.00,
        "weight" => false,
        "discount" => false
    ),
    "Product2" => array(
        "name" => "Rice",
        "qty"  => 2,
        "price" => 40.00,
        "weight" => true,
        "unit" => "KG",
        "discount" => true,
        "sale" => 10
    ),
    "Product3" => array(
        "name" => "Coffee",
        "qty"  => 3,
        "price" => 20.00,
        "weight" => false,
        "discount" => true,
        "sale" => 5 
    ),
    "Product4" => array(
        "name" => "Sugar",
        "qty"  => 1,
        "price" => 110.00,
        "weight" => true,
        "unit"  => "KG",  
        "discount" => true,
        "sale" => 15 
    ), 
    "Product5" => array(
        "name" => "Eggs",
        "qty"  => 12,
        "price" => 7.50,
        "weight" => true,
        "unit"  => "box",  
        "discount" => false,
        "sale" => 0 
    ),
     "Product5" => array(
        "name" => "Milk",
        "qty"  => 1,
        "price" => 355.25,
        "weight" => true,
        "unit"  => "KG",  
        "discount" => true,
        "sale" => 7 
     ),
     "Product6" => array(
        "name" => "Calbee Cps",
        "qty"  => 2,
        "price" => 37.00,
        "weight" => false,
        "discount" => false
    ),
    "Product7" => array(
        "name" => "Yakult",
        "qty"  => 12,
        "price" => 8.00,
        "weight" => true,
        "unit"  => "PK",
        "discount" => false
    )
);

$GLOBALS['subTotalAmount'] = 0;
$GLOBALS['totalAmountSale'] = 0;

function testPrintProduct($groceryItems) {
    foreach ($groceryItems as $key => $value) {
        echo " groceryItems $key => " . $value["name"] . "\n"; 
    }
}

function printLine() {
    echo "-------------------------------------------\n";
}
function printHeader() {
    echo " \t\t\t OFFICIAL RECEIPT \t\t\t\t\n";
}
function printLabels() {
    echo "QTY \tDESCRIPTION \t\t\t\t AMOUNT\n";
}
function printEndInfo(){
echo "          Cashier: Aidan Kodego               \n";                
echo "   TRANS#: 00000001    ORDER#: 000003344	    \n";
echo "             OR#: 22334549777                 \n";
echo "        DATE/TIME:" . date("Y-m-d h:i:sa") . "\n";
echo "                                              \n";
echo "                                              \n";                     
echo "                END OF BILLING	            \n";
echo "==============================================\n";
echo "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX\n";	

}
function printReceipt($groceryItems){
printLine();
printHeader(); 
printLine();
printLabels();
//combine ProductsSoldByPiece & ProductsSoldInBulk for any Item order
//calculateProductsSoldByPiece($groceryItems);
//calculateProductsSoldInBulk($groceryItems);
calculateProductsSold($groceryItems);
printLine();
calculateTotalItemsCountAndSubTotal($groceryItems);
calculateProductsSoldOnSale($groceryItems);
calculateTotalAmountDiscount();
printLine(); 
printEndInfo();
}

printReceipt($groceryItems);

function calculateProductsSold($groceryItems)
{
    foreach ($groceryItems as $key => $value) {
        if(!$value["weight"])
        {
            $amount = getFormatAmount($value["qty"], $value["price"]);

            echo  $value["qty"] . "PCS \t" . sprintf('% -10s', $value["name"])
            . " @ " .  sprintf('% -10s',number_format($value["price"],2)) . " " . sprintf('% 10s',$amount) . "\n";
            $GLOBALS['subTotalAmount'] = $GLOBALS['subTotalAmount'] + $amount;
        }
        elseif ($value["weight"])
        {
            $amount = getFormatAmount($value["qty"], $value["price"]);

            echo  $value["qty"] . $value["unit"] . " \t" . sprintf('% -10s', $value["name"])
            . " @ " .  sprintf('% -10s',number_format($value["price"],2)) . " " . sprintf('% 10s',$amount) . "\n";
            $GLOBALS['subTotalAmount'] = $GLOBALS['subTotalAmount'] + $amount;
        }
    }
}


function calculateProductsSoldByPiece($groceryItems)
{
    foreach ($groceryItems as $key => $value) {
        if(!$value["weight"]){
            $amount = getFormatAmount($value["qty"], $value["price"]);

            echo  $value["qty"] . "PCS \t" . sprintf('% -10s', $value["name"])
            . " @ " .  number_format($value["price"],2) . " \t\t " . sprintf('% -5s',$amount) . "\n";
            $GLOBALS['subTotalAmount'] = $GLOBALS['subTotalAmount'] + $amount;
        }
    }
}

function calculateProductsSoldInBulk($groceryItems)
{
    foreach ($groceryItems as $key => $value) {
        if($value["weight"]){
            $amount = getFormatAmount($value["qty"], $value["price"]);

            echo  $value["qty"] . $value["unit"] . " \t" . sprintf('% -10s', $value["name"])
            . " @ " .  number_format($value["price"],2) . " \t\t " . sprintf('% -5s',$amount) . "\n";
            $GLOBALS['subTotalAmount'] = $GLOBALS['subTotalAmount'] + $amount;
        }
    }
}

function calculateProductsSoldOnSale($groceryItems){
    echo "\nDISCOUNT:"; 
    foreach ($groceryItems as $key => $value) {
        if($value["discount"]){
            $amount = getFormatAmountOnSale($value["qty"], $value["price"], $value["sale"]);
              echo  "\n\t\t " . sprintf('% -5s', $value["name"])
            . " @ " .  sprintf('% -10s',$value["sale"] . "%") . " \t" . sprintf('%10s',"-" . $amount);
            $GLOBALS['totalAmountSale'] = $GLOBALS['totalAmountSale']  + $amount;
        }
    }
}


function getFormatAmountOnSale($qty, $price, $sale){
    $percentInDecimal =  $sale / 100;
    $amount = ($qty * $price) * $percentInDecimal;
    return number_format($amount , 2);
}

function getFormatAmount($qty, $price){
     $amount = $qty * $price;
     return number_format($amount , 2);
}

function calculateTotalItemsCountAndSubTotal($groceryItems){
    $count = 0; 
    foreach ($groceryItems as $key => $value) {
        if($value["weight"]){
            ++$count; 
        }else{
            $count += $value["qty"];
        }
    }
    echo "SUB TOTAL: \t " . sprintf('% 5s',$count) 
        . " ITEMS(S) \t\t" . number_format($GLOBALS['subTotalAmount'], 2); 
    return  $count; 
} 


function calculateTotalAmountDiscount() { 
    $amount = $GLOBALS['subTotalAmount'] - $GLOBALS['totalAmountSale'];
    echo "\nTotal:\t\t\t\t\t\t\t\t" . number_format($amount, 2) . "\n";
}

?>