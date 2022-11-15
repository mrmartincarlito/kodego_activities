<?php


checkUserPassword("admin", "Password123");
function checkUserPassword($username, $password) {

$defaultUsername = "admin";
$defaultPassword = "Password123";

if ($username === $defaultUsername && $password === $defaultPassword) {
    echo "Successfully Login";
    
    greetHello ("Bryan");
    }

    else if ($username === $defaultUsername && $password !== $defaultPassword) {
        echo "Wrong password please try again";
            }

        else if ($username !== $defaultUsername && $password === $defaultPassword) {
                echo "Wrong username please try again";
                    }

            else { 
                echo "Account does not exist";
            }

        }

        function greetHello($name) {
            echo "Hello" . ucfirst($name);
        }
?>

