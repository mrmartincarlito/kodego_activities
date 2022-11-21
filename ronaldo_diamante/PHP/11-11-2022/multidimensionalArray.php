<?php

$marks = array(
    "mohammad" => array(
        'physics' => 35,
        'math' => 30,
        'chemsitry' => 39
    ),

    "qadir" => array(
        'physics' => 30,
        'math' => 32,
        'chemsitry' => 29
    ),

    "zara" => array(
        'physics' => 31,
        'math' => 22,
        'chemsitry' => 39
    )
);
echo $marks["mohammad"]["physics"];
echo '<br />';

echo '<br />';
foreach ($marks as $key => $value) {
    echo $key . " = " . $value['physics'];
    echo '<br />';
}

echo '<br />';
echo '<br />';

$employees = array(
    array(
        'name' => "Emp 1",
        'jobTitle' => "Job Title",
        'salary' => 1000
    ),
    array(
        'name' => "Emp 2",
        'jobTitle' => "Job Title of 2",
        'salary' => 6000
    ),
    array(
        'name' => "Emp 3",
        'jobTitle' => "Job Title of 3",
        'salary' => 5000
    ),
    array(
        'name' => "Emp 4",
        'jobTitle' => "Job Title of 4",
        'salary' => 25000
    )
);

echo '<br />';
foreach ($employees as $employee) {
    echo $employee['name'];
    echo '<br />';
}
echo '<br />';


echo "---------------PAYROLL----------------" . '<br />';
foreach ($employees as $employee) {

    if ($employee['salary'] >= 5000) {
    echo "Name of employee: " . $employee['name'] . '<br />';
    echo "Job title of employee: " . $employee['jobTitle'] . '<br />';
    echo "Salary of employee: " . $employee['salary'] . '<br />';
    echo "--------------------------------------------"  . '<br />';
    }
}

echo '<br />';
echo '<br />';


echo "The salary of Emp 3 is: " . $employees[2]['salary'];