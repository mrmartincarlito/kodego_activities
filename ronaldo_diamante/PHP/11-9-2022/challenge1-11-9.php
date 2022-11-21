<?php

// Create a function which checks username and password_get_info

// Default values

// Username is admin
// Password is Password123

// Scenarios:
// 1. If username and password is matched print "Succesfully Logged In"
// 2. If username only match print "Wrong password, please try again"
// 3. If nothing match print "Account does not exist"


login("admin", "Password123");

function login($username, $password) {
    $defaultUsername = "admin1";
    $defaultPassword = "Password1234";

    if ($username === $defaultUsername & $password === $defaultPassword) {
        echo "Succesfully Logged In";
    } elseif ($username === $defaultUsername & $password !== $defaultPassword) {
        echo "Wrong password, please try again";
    } else {
        echo "Account does not exist";
    }
}