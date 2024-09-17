<?php

number(50);
function number($num){
    for ($i = 1; $i <= $num; $i++){
        if ($i % 2 == 0){
            echo "$i \n";
        }
    }

    for ($i = 1; $i <= $num; $i++){
        if ($i % 2 !== 0){
            echo "$i \n";
        }
    }
}


?>