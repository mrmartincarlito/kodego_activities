<?php

include_once("users.php");
include_once("constants.php");

/**
 * Check if may auth sa login.js login url na ajax
 */

if (isset($_GET['auth'])) {
    $loginCredentials = json_decode($_GET["auth"]);

    $response = array(
        "code" => INPUT_ERROR, // Default 200 422 500
        "description" => "Wrong username password"
    );
    
    foreach ($users as $user) {
        if ($user["username"] === $loginCredentials->username) {
            if ($user["password"] === $loginCredentials->password) {
                $response["code"] = SUCCESS;
                $response["description"] = "Successfully Login";

                $_SESSION["loggedin-user"] = $loginCredentials->username;
            }
        }
    }

    echo json_encode($response);
}
?>