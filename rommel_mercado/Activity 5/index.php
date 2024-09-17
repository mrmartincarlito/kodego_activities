<?php

function presidentsPhilippines(){
  
$random = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino",
    "bOng Go",
    "lEni RobredO",
    "fiDel v Ramos",
    "roBert seNya",
    "fErdinanD mArcOs Jr."); 
  
$presidents = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino",
    "fiDel v Ramos",
    "fErdinanD mArcOs Jr.",
    "Rommel Mercado test");

for($i=0; $i<count($presidents); $i++){
  
  for($x=0; $x<count($random); $x++){
    
  if(strtolower($presidents[$i])===strtolower($random[$x])){
    
    echo ucwords(strtolower($presidents[$i]));
    echo "\n";
}
}
}
}

presidentsPhilippines();



?>