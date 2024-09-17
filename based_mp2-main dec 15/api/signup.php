<?php
include_once ("constants.php");

if (isset($_POST['signup'])) 
{
    $signUpForms = json_decode($_POST['signup']);

    $response = array(
        "code" => SUCCESS,
        "description" => "Password match"
    ); 

    if ($signUpForms->password !== $signUpForms->confirm_password) {
       $response["code"] = INPUT_ERROR;
       $response["description"] = "Password do not match";
    } 

    echo json_encode($response);
    //@TODO Save new signup on the database
}