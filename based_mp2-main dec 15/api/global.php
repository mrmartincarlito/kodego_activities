<?php


include_once("users.php");
include_once("constants.php");

function getLoggedInDetails()
{
    $sqlCommand = "Select * .... where username =  ". $_SESSION["loggedin-user"];
}