<?php

checkOperator("10","6");

function checkOperator($ex,$why) {
    $defaultX = 10;  
    $defaultY = 6;

    if ($ex + $why){
    print $ex + $why;
    }
    else if ($ex - $why){
    print $ex - $why;
    }
    else if ($ex * $why){
    print $ex * $why;
    }
    else ($ex / $why){
    print $ex / $why}
    }
    ?>