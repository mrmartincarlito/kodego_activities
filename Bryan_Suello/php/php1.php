<?php

function login($user, $pass){

$username = "admin";
$password = "Password123";

if($user == $username && $pass == $password){
    echo("Successfully logged in!" . "<br>");
}
else if($user == $username && $pass != $password){
    echo("Wrong password. Please try again." . "<br>");
}
else if($user != $username && $pass == $password){
    echo("Wrong username. Please try again." . "<br>");
}
else{
    echo("Account doesn't exist");
}
}

function hello($name){
    if (preg_match('~[0-9]+~', $name)) {
        echo "Cannot greet unknown name.";
    }
    else{
    echo "Hello, " . ucfirst($name) . "!";
    }
}

login("asdasd", "Password123");
hello("bryan");

?>


<!--  other options:
 is_numeric()
str_contains
is_string()
ctype_digit()
-->