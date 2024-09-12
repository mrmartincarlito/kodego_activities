<?php

/** First method to associate create array */
$salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);

echo "Salary of mohammad is " . $salaries['mohammad'] . '<br />';
echo "Salary of qadir is " . $salaries['qadir'] . '<br />';
echo "Salary of zara is " . $salaries['zara'] . '<br />';

echo '<br />';

/** Second method to create array. */
$salaries['mohammad'] = "high";
$salaries['qadir'] = "high";
$salaries['zara'] = "high";

echo "Salary of mohammad is " . $salaries['mohammad'] . '<br />';
echo "Salary of qadir is " . $salaries['qadir'] . '<br />';
echo "Salary of zara is " . $salaries['zara'] . '<br />';

echo '<br />';
echo '<br />';


$employeeInformations = array(
    'name' => "Emp 1",
    'jobTitle' => "Job Title",
    'salary' => 2000
);
echo $employeeInformations['name'] . '<br />';
echo $employeeInformations['jobTitle'] . '<br />';
echo $employeeInformations['salary'] . '<br />';

echo '<br />';

foreach ($employeeInformations as $employeeInformation) {
    echo $employeeInformation . '<br />';
}

echo '<br />';

foreach ($employeeInformations as $key => $value) {
    echo "$key = $value" . '<br />';
}
