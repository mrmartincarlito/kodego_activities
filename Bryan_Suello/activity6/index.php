<?php
$items = array(
    array(
        "item" => "Dog Leash",
        "cost" => "150.10",
        "qty" => "3PCS"
    ),
    array(
        "item" => "Dog Collar",
        "cost" => "200",
        "qty" => "2PCS"
    ),
    array(
        "item" => "Dog Food",
        "cost" => "300.50",
        "qty" => "5KG",
        "discount" => "10"
    ),
    array(
        "item" => "Dog Ear Drops",
        "cost" => "250",
        "qty" => "3OML",
        "discount" => "10"
    ),
    array(
        "item" => "Dog Wet Food",
        "cost" => "900",
        "qty" => "50G",
        "discount" => "20"
    ),
);


function receipt($items)
{
    $subTotal = 0;

    echo "<pre>";
    echo   "------------------------------------------------" . "\n"
        . "\t\t" . "OFFICIAL RECEIPT" . "\n"
        . "------------------------------------------------" . "\n"
        . "  " . "QTY" . "\t" . "DESCRIPTION" . "\t\t\t" . "AMOUNT";

    foreach ($items as $item) {
        echo "<pre>";
        echo "  "
            . $item["qty"] . "\t" . $item["item"] . " @ "
            . number_format($item["cost"], 2)
            // . ((strpos($item["cost"], ".") ? null : ".00"))
            . "\t\t"
            . (strpos($item["qty"], "G") || (strpos($item["qty"], "ML")) ?
                number_format($item["cost"], 2) : number_format($item["qty"] * $item["cost"], 2));
        (strpos($item["qty"], "G") || (strpos($item["qty"], "ML")) ?
            $subTotal += $item["cost"] : $subTotal += $item["qty"] * $item["cost"]);
        echo "</pre>";
    }

    echo "------------------------------------------------" . "\n";
    echo "SUB-TOTAL:   " . count($items) . " ITEM(S)" . "\t\t\t" . number_format($subTotal, 2) . "\n"
        . "DISCOUNT: " . "\n";
    foreach ($items as $item) {
        foreach ($item as $key => $value) {
            echo "<pre>";
            echo ($key == 'discount') ?
                "    " . $item["item"] . " @ " . $value . "%" . "\t\t\t"
                . "-" . number_format(($value / 100) * $item["cost"], 2)  . "\n"
                : null;
            echo "</pre>";
            ($key == 'discount') ?
                $subTotal = $subTotal - (($value / 100) * $item["cost"]) : null;
        }
    }
    echo "TOTAL: \t\t\t\t\t" . number_format($subTotal, 2) . "\n";

    echo "------------------------------------------------" . "\n";
    echo  "\n";
    echo "\t     " . "Cashier: Suello, Bryan" . "\n"
        . "    " . "TRANS#: 00000001" . "\t" . "ORDER#: 0000000234" . "\n"
        . "\t\t" . "OR#: 2235454934" . "\n"
        . "\t" . "DATE/TIME: " .  date("Y-m-d") . date("  H:i:s") . "\n\n"
        . "\t\t" . "END OF BILLING" . "\n\n"
        . "------------------------------------------------" . "\n"
        . "THIS RECEIPT IS NOT VALID FOR CLAIM OF INPUT TAX";
    echo "</pre>";
}

receipt($items);
