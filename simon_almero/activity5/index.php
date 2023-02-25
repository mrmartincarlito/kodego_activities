
<?php
	$presidents = array(
	  "gLorIa mAcaPagal ArrOyo",
	  "rOdrigo rOa Duterte",
	  "benIgno sImeOn aQuino III",
	  "bOng Go",
	  "lEni RobredO",
	  "fiDel v Ramos",
	  "roBert seNya",
	  "fErdinanD mArcOs Jr."
	  );
	
	  CorrectNames($presidents);
	  function CorrectNames($presidents){
	  foreach ($presidents as $president){
	    if (($president == "bOng Go")
	      || ($president == "lEni RobredO")
	      || ($president == "roBert seNya")){
	      continue;
	    }
	   $tolower = strtolower($president);
	    if($president == "benIgno sImeOn aQuino III"){
	      echo str_replace("Iii", "III", ucwords($tolower)) ."\n";
	    }else{
	       echo ucwords($tolower) ."\n";
	    }
	     }
	     
	     
	  }
<?php
	$presidents = array(
	  "gLorIa mAcaPagal ArrOyo",
	  "rOdrigo rOa Duterte",
	  "benIgno sImeOn aQuino III",
	  "bOng Go",
	  "lEni RobredO",
	  "fiDel v Ramos",
	  "roBert seNya",
	  "fErdinanD mArcOs Jr."
	  );
	
	  CorrectNames($presidents);
	  function CorrectNames($presidents){
	  foreach ($presidents as $president){
	    if (($president == "bOng Go")
	      || ($president == "lEni RobredO")
	      || ($president == "roBert seNya")){
	      continue;
	    }
	   $tolower = strtolower($president);
	    if($president == "benIgno sImeOn aQuino III"){
	      echo str_replace("Iii", "III", ucwords($tolower)) ."<br>";
	    }else{
	       echo ucwords($tolower) ."<br>";
	    }
	     }
	     
	     
	  }
?>