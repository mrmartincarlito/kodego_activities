<?php

$listOfnames = array (
    "glorIa mAcaPagal ArrOyo"=>"President",
    "rOdrigo roa Duterte"=>"President",
    "benigno simeOn aQuino 3rD"=>"President",
    "bOng gO"=>"NotPresident",
    "leni RobreDo"=>"NotPresident",
    "fiDel v Ramos"=>"President",
    "roBert senYa"=>"NotPresident",
    "ferdinanD marcOs jr."=>"President",
);

foreach ($listOfnames as  $listOfname=>$value)
 if($value=="President"){
    $listofpresidents= strtolower($listOfname);
    echo ucwords($listofpresidents)."<br>";

 }

 




?>