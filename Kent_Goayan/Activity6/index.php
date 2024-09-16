<?php

// ..... Items Purchase ..... //
$items = array(
    array(
        "item" => "Computer",
        "cost" => "25000",
        "qty" => "1"
    ),
    array(
        "item" => "Iphone",
        "cost" => "23000",
        "qty" => "1"
    ),
    array(
        "item" => "Watch",
        "cost" => "5699",
        "qty" => "1",
        "discount" => "50"
    ),
    array(
        "item" => "Shoes",
        "cost" => "2350",
        "qty" => "1",
        "discount" => "25"
    ),
    array(
        "item" => "Pants",
        "cost" => "999",
        "qty" => "3",
        "discount" => "10"
    ),
);

{
    $subTotal = 0;
    $item = "this is my numeric";



    //...... Computation Formula .....//

    echo "<pre>";
    echo   "------------------------------------------------------------------------" . "\n"
        . "\t\t\t" . "OFFICIAL RECEIPT" . "\n"
        . "-------------------------------------------------------------------------" . "\n"
        . " \t " . "QTY" . "\t\t" . "DESCRIPTION" . "\t\t\t" . "AMOUNT";

    foreach ($items as $item) {
        echo "<pre>";
        echo " "
            . "\t". $item["qty"] . "\t\t" . $item["item"] . " "
            . number_format($item["cost"])
            . "\t\t\t"
            . (strpos($item["qty"], "g") || (strpos($item["qty"], "ml")) ?
            number_format ($item['cost']) : number_format($item['qty'] * $item['cost']));
            (strpos($item["qty"], "g") || (strpos($item["qty"], "ml")) ?
            ($subTotal += $item['cost']) : ($subTotal += ($item['qty'])*($item['cost'])));
        echo "</pre>";
    }

    echo "------------------------------------------------------------------------" . "\n";

    // ...... Sub-total formula ....... //

    echo "\t" . "SUB-TOTAL:   " . count($items) . " ITEM(S)" . "\t\t\t" ."\t" . number_format($subTotal) . "\n"
        . "\t" . "DISCOUNT: " . "\n";
    foreach ($items as $item) {
        foreach ($item as $key => $value) {
            echo "<pre>";
            echo ($key == 'discount') ?
                "\t" . $item["item"] . " \t " . $value . "%" . "\t\t\t"
                . "\t" ."-" . number_format(($value / 100) * $item["cost"])  . "\n"
                : null;
            echo "</pre>";
            ($key == 'discount') ?
                $subTotal = $subTotal - (($value / 100) * $item["cost"]) : null;
        }
    }

    // ...... Total formula ....... //

    echo "\t" . "TOTAL: \t\t\t\t\t\t" . number_format($subTotal, 2) . "\n";
   

    echo "------------------------------------------------------------------------" . "\n";

    // ...... Cashier and Billing Information ....... //

    echo  "\n";
    echo "\t\t\t    " . "Cashier: Kent Goayan" . "\n"
        . "\t\t" . "TRANS#: 00000001" . "\t\t" . "ORDER#: 0000000234" . "\n"
        . "\t\t\t\t" . "OR#: 2235454934" . "\n"
        . "\t\t\t" . "DATE/TIME: " .  date("Y-m-d") . date("  H:i:s") . "\n\n"
        . "\t\t\t\t" . "END OF BILLING" . "\n\n"
        . "-----------------------------------------------------------------------" . "\n"
        . "\t\t" . "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX";
    echo "</pre>";
}

?>