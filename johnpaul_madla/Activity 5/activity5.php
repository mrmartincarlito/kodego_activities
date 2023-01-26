<?php

$presidents = array (

    "glorIa maCaPaGal ARoyO",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "bOng Go",//
    "lEni RobredO",//
    "fiDel v Ramos",
    "roBert seNya",//
    "fErdinanD mArcOs Jr."
    

    
);
returnProperNames($presidents);

function returnProperNames($presidents) {
    foreach ($presidents as $presidents)

    if ($presidents == "bOng Go") {
            continue;
    } else if ($presidents == "lEni RobredO") {
            continue;
    } else if ($presidents == "roBert seNya") {
            continue;
    }
        echo ucwords(strtolower($presidents)) . "\n";
}    
 
?>