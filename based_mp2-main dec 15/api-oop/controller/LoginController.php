<?php
include_once ("BaseController.php");
include_once ("../constants.php");

class LoginController extends BaseController
{
    public function login($username, $password)
    {
        $users = (array) $this->index();

        $response = array(
            "code" => INPUT_ERROR, // Default 200 422 500
            "description" => "Wrong username password"
        );

        foreach ($users as $user) {
            if ($user->data["username"] === $username) {
                if (password_verify($password, $user->data["password"])) {
                    $response["code"] = SUCCESS;
                    $response["description"] = "Successfully Login";
    
                    $_SESSION["loggedin-user"] = $username;
                }
            }
        }

        return $response;
    }
}