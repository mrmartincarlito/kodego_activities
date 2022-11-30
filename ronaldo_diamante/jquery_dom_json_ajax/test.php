<?php

$payload = json_decode($_GET["book"]);

checkAuthorName($payload->author);

// This is yout business logic
function checkAuthorName($name) {
    $response = array(
        "message" => "Successful",
        "author" => "Author is " . $name,
    );

    if ($name == "Ronaldo Diamante") {
        $response["message"] = "Successful ka";
    } else {
        $response["message"] = "Not Successful";
    }

    echo json_encode($response);
}


?>