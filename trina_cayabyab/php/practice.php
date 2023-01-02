<?php
    $employees = array(
        array(
        "name" => "Emp 1",
        "jobtitle" => "Job Title",
        "salary" => 2000
        ),
        array(
        "name" => "Emp 2",
        "jobtitle" => "Job Title",
        "salary" => 3000
        ),
        array(
        "name" => "Emp 3",
        "jobtitle" => "Job Title",
        "salary" => 5000
        )
      );
      echo "----payroll----\n";
      foreach ($employees as $employee) {
        echo "Name of Employee" . $employee ["name"] "<br>"
        echo "Job Title \t" . $employee ["jobtitle"] ."\n";
        echo "Salary \t" . $employee ["salary"] ."\n";
        
      }
?>