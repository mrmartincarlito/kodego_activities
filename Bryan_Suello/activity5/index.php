<?php

$names = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "bOng Go",
    "lEni RobredO",
    "fiDel v Ramos",
    "roBert seNya",
    "fErdinanD mArcOs Jr.",
    "Micael V",
    "Bryan suello" //testing purposes
);

$presidents = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "fiDel v Ramos",
    "fErdinanD mArcOs Jr.",
    "Bryan Suello"
);

function displayPresidents($names, $presidents)
{
    foreach ($names as $name) {
        foreach ($presidents as $president) {
            if (strtolower($president) === strtolower($name)) {
                echo "<pre>";
                echo (strtolower($president) === "benigno simeon aquino iii") ? "Benigno Simeon Aquino III" : ucwords(strtolower($president)) . "\n";
                echo "</pre>";
            }
        }
    }
}

displayPresidents($names, $presidents);
