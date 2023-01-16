<?php

include_once("users.php");
include_once("constants.php");

if (isset($_GET['getAuthUser'])) {
    $loggedInUser = @$_SESSION["loggedin-user"];

    $response = array(
        "code" => INPUT_ERROR,
        "description" => "Logged In User Not Found",
        "details" => null
    );

    foreach($users as $user) {
        if ($user["username"] === $loggedInUser) {
            $response["code"] = SUCCESS;
            $response["description"] = "Succesfull";
            $response["details"] = $user;
        }
    }

    echo json_encode($response);
}