<?php

$Presidents = [
    "glorIa mAcaPagal ArrOyo",
    "rOdrigo roa Duterte",
    "benigno simeOn aQuino 3rd",
    "bOng gO",
    "leni RobreDo",
    "fiDel v Ramos",
    "ferdinanD marcOs jr."
    ];

echo "Presidents: \n\n";
foreach($Presidents as $President){
    echo  ucwords (strtolower($President))."\n";
}
?>