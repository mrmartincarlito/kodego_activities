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

calculateNumbers ("10", "20", "*");

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

    else {
        echo "Operation not found";
    }
    
}

?>