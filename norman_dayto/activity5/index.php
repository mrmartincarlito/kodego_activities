<?php

$namesAll = array (
  "gLorIa mAcaPagal ArrOyo",
  "rOdrigo rOa Duterte",
  "benIgno sImeOn aQuino III",
  "bOng Go",
  "lEni RobredO",
  "fiDel v Ramos",
  "roBert seNya",
  "fErdinanD mArcOs Jr."
);

$namesPresidents = array (
  "gLorIa mAcaPagal ArrOyo",
  "rOdrigo rOa Duterte",
  "benIgno sImeOn aQuino III",
  "fiDel v Ramos",
  "fErdinanD mArcOs Jr."
);
  
foreach ($namesAll as $nameAll) {
  foreach ($namesPresidents as $namePresident) {
    if ($nameAll == $namePresident) {
      $nameAll = strtolower($nameAll);
      echo ucwords($nameAll) . "\n";
    }
  }
}
?>