<?php

checkifusernameandpassword("admin", "Password123");

function checkifusernameandpassword($username, $password) {
    $defaultusername = "admin";
    $defaultpassword = "Password123";

    if ($username === $defaultusername && $password === $defaultpassword) {
        echo "Successfully Login.";}
        greetHello("Juan123");
    }
function greetHello($name) {
    echo "Hello " .ucfirst($name);
}

?>