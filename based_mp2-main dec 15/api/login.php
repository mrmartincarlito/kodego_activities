<?php
include_once ("config.php");
include_once ("constants.php");

//@TODO Change table name 
define("TABLE_NAME", "users");

/**
 * Check if may auth sa login.js login url na ajax
 */
if (isset($_POST['auth'])) {
    $loginCredentials = json_decode($_POST["auth"]);

    $response = array(
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

    echo json_encode($response);
}
?>