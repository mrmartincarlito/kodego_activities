<?php

// Given the challenge number 1
// Create a function  which greets a name Hello. when succesfully login

// Given a string name:
// Example

// Name is Bob

// Outpur should be: "Hello Bob"

// IF the name starts in lowercase, it should uppwercase the first letter

//Example

//Name juan

// Output should be: "Hello Juan"

$name = ucfirst("ronaldo");
loginGreetings($name, "admin", "admin@123");

function loginGreetings($name, $username, $password) {
    $defaultUsername = "admin";
    $defaultPassword = "admin@123";
    if ($defaultUsername === $username & $defaultPassword === $password) {
        // $name = ucfirst($name);
        $GLOBALS["name"];
        echo "Hello, $name!";
    } else {
        $GLOBALS["name"];
        echo "$name, possible wrong username or password. Try again.";
    }
}