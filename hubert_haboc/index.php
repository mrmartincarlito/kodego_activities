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
*/

calculateNumbers ("/");

function calculateNumbers ($operator) {
    $num1 = "10";
    $num2 = "5";


    if ($operator === "+") {
        echo $num1 + $num2;
    }

    else if ($operator === "-") {
        echo $num1 - $num2;
    }

    else if ($operator === "*") {
        echo $num1 * $num2;
    }

    else {
        echo "Operation not found";
    }
    
}

?>