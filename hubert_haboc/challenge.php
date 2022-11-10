<?php

checkUserPassword ("admin", "Password123")

function checkUserPassword ($username, $password) {
    $defaultUsername = "admin";
    $defaultPassword = "Password123";

    if ($username === $defaultUsername && $password === $defaultPassword) {
        echo "Successfully Logged In";
    }

    else if ($username === $defaultPassword && $password !== $defaultPassword) {
        echo "Wrong password, please try again";
    }

    else {
        echo "Account does not exist"
    }
}

?>