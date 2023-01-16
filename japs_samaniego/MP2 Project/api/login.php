<?php

include_once ("constants.php");
include_once ("users.php");

//@TODO Change table name 
//define("TABLE_NAME", "users");

/**
 * Check if may auth sa login.js login url na ajax
 */
if (isset($_GET['auth'])) {
    $loginCredentials = json_decode($_GET["auth"]);

    $response = array(
        "code" => INPUT_ERROR, // Default 200 422 500
        "description" => "WRONG USERNAME/PASSWORD"
    );

   foreach ( $users as $user) {
        if ($user["usename"] === $loginCredentials->username) {
            if ($user["password"] === $loginCredentials->password) {
                $response["code"] = SUCCESS;
                $response["description"] = "SUCCESSFULLY LOGGED IN";
            }
        }
   }    
   
   
   /* $response = array(
        "code" => INPUT_ERROR, // Default 200 422 500
        "description" => "Wrong username password"
    );
    
    $sqlCommand = "SELECT * FROM " . TABLE_NAME;

    $results = $connection->query($sqlCommand);

    $users = array();

    while ($row = $results->fetch_assoc()) {
        array_push($users, $row);
    }

    foreach ($users as $user) {
        if ($user["username"] === $loginCredentials->username) {
            if (password_verify($loginCredentials->password, $user["password"])) {
                $response["code"] = SUCCESS;
                $response["description"] = "Successfully Login";

                $_SESSION["loggedin-user"] = $loginCredentials->username;
            }
        }
    }

    echo json_encode($response); */
}
?>