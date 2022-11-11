<?php

/*
checkUserPassword ("admin", "Password123");

function checkUserPassword ($username, $password) {
    $defaultUsername = "admin";
    $defaultPassword = "Password123";

    if ($username === $defaultUsername && $password === $defaultPassword) {
        echo "Successfully Logged In";
    }

    else if ($username === $defaultUsername && $password !== $defaultPassword) {
        echo "Wrong password, please try again";
    }

    else if ($username !== $defaultUsername && $password !== $defaultPassword) {
        echo "Account does not exist";
    }
}


calculateNumbers ("20", "40", "-");

function calculateNumbers ($num1, $num2, $operator) {

    if ($operator === "+") {
        echo $num1 + $num2;
    }

    else if ($operator === "-") {
        echo $num1 - $num2;
    }

    else if ($operator === "*") {
        echo $num1 * $num2;
    }

    else if ($operator === "/") {
        echo $num1 / $num2;
    }

    else {
        echo "Operation not found";
    }
    
}

$x = 3

for ($i = 0, $i < 5, $i++) {
    $x = $x * $i;
}

*/

<?php

$x = 20;
$sum = 0;
for ($i=1; $i<=$x; $i++) {
    if ($i % 2 === 0) {
      echo $i ."\n";
      $sum = $sum + $i;
    } 
  }
 echo "Total: $sum" . "\n"; 


for ($i=1; $i<=$x; $i++) {
    if ($i % 2 !== 0) {
    echo $i ."\n";
    $sum = $sum + $i;
    }
  }
  echo "Total: $sum";

?>

?>