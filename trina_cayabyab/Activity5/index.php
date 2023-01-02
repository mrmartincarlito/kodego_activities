<?php
$names = array(
  "gLorIa mAcaPagal ArrOyo",
  "rOdrigo rOa Duterte",
  "benIgno sImeOn aQuino III",
  "bOng Go",
  "lEni RobredO",
  "fiDel v Ramos",
  "roBert seNya",
  "fErdinanD mArcOs Jr."
);

function getPresidents($names) {
  $presidents = array(
    "Gloria Macapagal Arroyo",
    "Rodrigo Roa Duterte",
    "Benigno Simeon Aquino III",
    "Fidel V Ramos",
    "Ferdinand Marcos Jr."  
  );
  
  $properNames = array();

  foreach ($names as $name) {
    $properName = str_replace("Iii","III", ucwords(strtolower($name)));
    
    if (in_array($properName, $presidents)) {
      $properNames[] = $properName;
    }
  }

  return implode(", ", $properNames);
}

echo getPresidents($names);


?>