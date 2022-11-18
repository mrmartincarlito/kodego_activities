<?php

$presidentnames = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "bOng Go",
    "lEni RobredO",
    "fiDel v Ramos",
    "roBert seNya",
    "fErdinanD mArcOs Jr.",
);
{
    echo "Presidents: \n\n";
    foreach ($presidentnames as $President) {
                echo "<pre>";
                echo  ucwords (strtolower($President))."\n";
                echo "</pre>";
            }
        }
?>