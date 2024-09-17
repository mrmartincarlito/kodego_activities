<?php
include_once ("../models/Users.php");
include_once("../controller/LoginController.php");

/**
 * Eto yung connected kay AJAX or Jquery
 */
$usersModel = new Users();
$loginController = new LoginController($usersModel);

if (isset($_POST['auth']))
{
    $loginCredentials = json_decode($_POST["auth"]);
    $result = $loginController->login($loginCredentials->username, $loginCredentials->password);

    echo json_encode($result);
}