<?php

checkifusernameandpassword("admin", "Password123");

checkifusernameandpassword("admin", "password12345");

checkifusernameandpassword("admins", "password12345");

function checkifusernameandpassword($username, $password) {
    $defaultusername = "admin";
    $defaultpassword = "Password123";

    if ($username === $defaultusername && $password === $defaultpassword) {
        echo "Successfully Login.";}

    if ($username === $defaultusername && $password === $defaultpassword) {
        echo "Wrong Password, Please try again.";}

    if ($username === $defaultusername && $password === $defaultpassword) {
        echo "Account dest exist.";}}
?>