<?php
// Given the challenge number 2
// It will ggreet only those names which doesn't have a numeric or special characters

// Example

// Name is juan123

// Output should be: "Cannot greet unknown name"


loginGreetings("ronaldo123", "admin", "admin@123");

function loginGreetings($name, $username, $password) {
    $defaultUsername = "admin";
    $defaultPassword = "admin@123";
    if ($defaultUsername === $username & $defaultPassword === $password) {
        if ($name == is_numeric($name)) {
            echo "Cannot greet unknown name";
        } else {
            echo "Hello " . $name;
        }
        
    } else {
        echo "Possible wrong username or password. Try again.";
    }
}