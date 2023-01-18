<?php
checkUserPassword("sdfsf", "dfsd");
function checkUserPassword ($username, $password){
    $defaultUsername = "charles";
    $defaultPassword = "Pass123";

    if ($username === $defaultUsername && $password === $defaultPassword){
        echo "successfull";
    }
    else if ($defaultUsername === $defaultUsername && $defaultPassword === $defaultPassword){
        echo "unsuccessfull";
    }
    else {
        echo "account not ready";
    }
}





?>
