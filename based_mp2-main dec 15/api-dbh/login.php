<?php

include_once("config.php");
include_once ("constants.php");

//@var change table name
define("TABLE_NAME", "users");

if (isset($_POST['auth']))
{
    $loginCredentials = json_decode($_POST["auth"]);

    $response = array(
        "code" => INPUT_ERROR, // Default 200 422 500
        "description" => "Wrong username password"
    );

    //Select * from users
    $users = $database->get(TABLE_NAME);

    foreach ($users as $user) {
        if ($user["username"] === $loginCredentials->username) {
            if (password_verify($loginCredentials->password, $user["password"])) {
                $response["code"] = SUCCESS;
                $response["description"] = "Successfully Login";

                $_SESSION["loggedin-user"] = $loginCredentials->username;
            }
        }
    }

    echo json_encode($response);
}