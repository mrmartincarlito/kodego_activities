<?php
function compute_13th_month_pay($name, $salary, $months_rendered) {
  // Compute for the 13th month pay
  $thirteenth_month_pay = $salary / 12 * $months_rendered;
  
  // If the 13th month pay is more than 90,000, compute for the tax
  $tax = 0;
  if ($thirteenth_month_pay > 90000) {
    $tax = $thirteenth_month_pay * 0.05;
  }
  
  // Return the result as an array
  return array(
    "name" => $name,
    "salary" => $salary,
    "months_rendered" => $months_rendered,
    "tax" => $tax,
    "13th_month_pay" => $thirteenth_month_pay - $tax,
  );
}

// Given data
$employees = array(
  array(
    "name" => "Emp 1",
    "salary" => 35000,
    "months_rendered" => 8,
  ),
  array(
    "name" => "Emp 2",
    "salary" => 90000,
    "months_rendered" => 12,
  ),
  array(
    "name" => "Emp 3",
    "salary" => 150000,
    "months_rendered" => 9,
  ),
  array(
    "name" => "Emp 4",
    "salary" => 20000,
    "months_rendered" => 12,
  ),
);

// Compute for the 13th month pay of each employee
foreach ($employees as $employee) {
  $result = compute_13th_month_pay($employee["name"], $employee["salary"], $employee["months_rendered"]);
  
  // Result
  echo "Name: " . $result["name"] . "\n";
  echo "Salary: " . $result["salary"] . "\n";
  echo "Months rendered: " . $result["months_rendered"] . "\n";
  echo "Tax: " . $result["tax"] . "\n";
  echo "13th Month: " . $result["13th_month_pay"] . "\n";
  echo "--------------------------------------------\n";
}

?>