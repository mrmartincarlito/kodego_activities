<?php

$items = array(
    array(
        "item" => "ITEM 1",
        "amount" => "2",
        "cost" => "100"
    ),
    array(
        "item" => "ITEM 2",
        "amount" => "7",
        "cost" => "35"
    ),
    array(
        "item" => "ITEM 3",
        "amount" => "1",
        "cost" => "350"
    ),
    array(
        "item" => "ITEM 4",
        "amount" => "2",
        "cost" => "20"
    ),
);


function receipt($items)
{
    $total = 0;
    echo "<pre>";
    echo "QTY DESC" . "\t" . "AMT" . "\t" . "Total" . "\n" .
        "------------------------------";
    foreach ($items  as $key => $value) {
        echo "<pre>";
        echo "(" . $value["amount"] . ")" . $value["item"] . "\t" . $value["cost"] . "\t" . $value["amount"] * $value["cost"];
        echo "</pre>";
        $total += $value["amount"] * $value["cost"];
    }
    echo "------------------------------" . "\n";
    echo "Overall Total:" . "\t\t" . $total;
    echo "</pre>";
}

receipt($items);

