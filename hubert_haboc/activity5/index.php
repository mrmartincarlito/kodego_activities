<?php
  $presidents = ["gLoria mAcaPagal ArrOyo", "rOdrigo rOa Duterte", "benigno simeOn aQuino III", "bong Go", "lEni RobredO", "fiDel v Ramos", "roBert seNya", "fErdinanD mArcos Jr."];
  
  $realPresidents = [];
  $notPresidents = [];
  
  foreach ($presidents as $i => $president) {
    $lowercasedPresident = strtolower($president);
    $fixedPresidentName = ucwords($lowercasedPresident);
    if ($i == 3 || $i == 4 || $i == 6) {
      array_push ($notPresidents, $fixedPresidentName);
    }
  
    else {
      array_push ($realPresidents, $fixedPresidentName);
    }
  }
  
  foreach ($realPresidents as $realPresident) {
    echo $realPresident . "\n";
  }
?>
