<?php
include_once ("config.php");
include_once("constants.php");

if (isset($_GET['getAuthUser'])) {
    $loggedInUser = @$_SESSION["loggedin-user"];

    $response = array(
        "code" => INPUT_ERROR,
        "description" => "Logged In User Not Found",
        "details" => null
    );

    $sqlCommand = "SELECT * FROM users";

    $results = $connection->query($sqlCommand);

    $users = array();

    while ($row = $results->fetch_assoc()) {
        array_push($users, $row);
    }

    foreach($users as $user) {
        if ($user["username"] === $loggedInUser) {
            $response["code"] = SUCCESS;
            $response["description"] = "Succesfull";
            $response["details"] = $user;
        }
    }

    echo json_encode($response);
}