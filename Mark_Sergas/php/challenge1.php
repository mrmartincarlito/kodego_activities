<?php

checkUserPassword("admin", "Password123");

function checkUserPassword($username,$password) {
    $defaultUsername = "admin";
    $defaultPassword = "Password123";

    // first condition to execute
    if ($username === $defaultUsername && $password === $defaultPassword){ 
        echo "Username and password matched.";
    } 
    
    // 2nd condition to execute
    else if ($username === $defaultUsername && $password !== $defaultPassword){
        echo "Password does not matched.";
    } 
    // last condition to execute
    else
    {
        echo "Account does not exist.";
    }
}
?>