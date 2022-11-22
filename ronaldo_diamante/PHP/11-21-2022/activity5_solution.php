<?php

$inputNames = array(
  "gLoria mAcaPagal ArrOyo",
  "rOdrigo rOa Duterte",
  "benigno simeOn aQuino III", // array("benigno", "simeOn" , "aQuino", "III")
  "bong Go",//3
  "lEni RobredO",//4
  "fiDel v Ramos",
  "roBert seNya",//6
  "fErdinanD mArcos Jr.",
  "carlito",
  "hjghjgh"
);

$presidents = array(
  "Gloria Macapagal Arroyo",
  "Rodrigo Roa Duterte",
  "Benigno Simeon Aquino III",
  "Fidel V Ramos",
  "Ferdinand Marcos Jr."  
);


returnProperNames($inputNames);

function returnProperNames($inputNames) {
  global $presidents;
  
  foreach ($inputNames as $inputName) {
    $properName = str_replace("Iii", "III", ucwords(strtolower($inputName)));
    
    foreach ($presidents as $president) {
      if ($president == $properName) {
        echo $president . "<br />";
      }
    }
    
  }
}






?>