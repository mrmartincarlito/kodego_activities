<?php
include_once ("config.php");

$path = "";
$hasError = false;
foreach ($_FILES as $key) {
    $name = $key["name"];
    $path = "uploads/$name";

    // if ($key["size"] > 1000000) {
    //     $hasError = true;
    // }

    @move_uploaded_file($key["tmp_name"], $path);
}

if ($hasError)
{
    $response["code"] = SERVER_ERROR;
    $response["description"] = "Max File Reached";
    echo json_encode($response);
    return;
}

$username = $_SESSION["loggedin-user"];

$sqlCommand = "
    UPDATE users
    SET `profile_pic` = '$path'
    WHERE username = '$username'
    ";

$isInserted = $connection->query($sqlCommand);

$response = array();

if ($isInserted)
{
    $response["code"] = SUCCESS;
    $response["description"] = "Successfully Updated Employee";
} else
{
    $response["code"] = SERVER_ERROR;
    $response["description"] = "Error while updating employee";
}

echo json_encode($response);
