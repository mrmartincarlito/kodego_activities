<?php

$employees = array(
    array(
        "Name" => "John Smith",
        "Salary" => 35000,
        "MonthsRendered" => 8,
    ), 
    array(
        "Name" => "Jane Smith",
        "Salary" => 91000,
        "MonthsRendered" => 12,
    ), 
    array(
        "Name" => "James Smith",
        "Salary" => 150000,
        "MonthsRendered" => 9,
    ), 
    array(
        "Name" => "Jam Smith",
        "Salary" => 20000,
        "MonthsRendered" => 12,
    ),
);


computeBonus($employees);

function computeBonus ($employees) {

    $tax = 0;
    $bonus = 0;
    $compute = 0;

    foreach ($employees as $employee) {

        echo "Name: " . $employee["Name"] . '<br />';
        echo "Salary: " . $employee["Salary"] . '<br />';
        echo "Months rendered: " . $employee["MonthsRendered"] . '<br />';

        $compute = (($employee["Salary"] * $employee["MonthsRendered"])/ 12);

        if ($employee["Salary"] > 90000) {
            $tax = $compute * (5/100);
            $bonus = $compute - $tax;
            echo "Tax: ". $tax . '<br />';

        }   else {
            echo "Tax: " . $tax = 0 .'<br />';
            $bonus = $compute;
        }

        echo "13th Month: " . $bonus . '<br />';
        echo "-------------------------------<br />";

    }
}

?>
