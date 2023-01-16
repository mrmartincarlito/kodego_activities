<?php
	$presidents = array (
	  array(
      "name" => "gLorIa mAcaPagal ArrOyo",
      "position" => "president"
      ),
      
    array(
      "name" => "rOdrigo rOa Duterte",
      "position" => "president"
      ),
      
    array(
      "name" => "benIgno sImeOn aQuino III",
      "position" => "president"
      ),
      
    array(
      "name" => "bOng Go",
      "position" => "senator"
      ),
      
    array(
      "name" => "lEni RobredO",
      "position" => "vp"
      ),
      
    array(
      "name" => "fiDel v Ramos",
      "position" => "president"
      ),
      
    array(
      "name" => "roBert seNya",
      "position" => "artist"
      ),
      
    array(
      "name" => "fErdinanD mArcOs Jr.",
      "position" => "president"
      ),
	);
    foreach ($presidents as $president ) {
        if ($president["position"] == "president" ){
        $final = ucwords(strtolower($president["name"]));
        echo $final;
        echo "<br>";
        }
        
    }
?>