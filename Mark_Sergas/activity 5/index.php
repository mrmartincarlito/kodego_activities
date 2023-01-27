<?php

$presidents = array(
    "gLoria mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benigno simeOn aQuino III",
    "bong Go",
    "lEni RobredO",
    "fiDel v Ramos",
    "roBert seNya",
    "fErdinanD mArcos Jr."
);

returnProperNames($presidents);

function returnProperNames($presidents){
    $i = 0;
    foreach ($presidents as $president){
        if ($i==3||$i==4||$i==6){
            $i++;
            continue;
        }
        $tolower = strtolower($president);
        if ($i == 2){
            echo str_replace("Iii","III", ucwords($tolower)) . "<br/>";
        }else {
            echo ucwords(strtolower($president)) . "<br/>";
        }
            $i++;
    }
}

?>