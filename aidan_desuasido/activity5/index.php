<?php

// <!--
// Activity 5 Coding Challenge
// Create a function that will return proper names of the president 
// of the republic of the Philippines, exclude those who where not 
// become a president
// Presidents:
// 1.gLorIa mAcaPagal ArrOyo
// 2.rOdrigo rOa Duterte
// 3.benIgno sImeOn aQuino III
// 4.bOng Go
// 5.lEni RobredO
// 6.fiDel v Ramos
// 7.roBert seNya
// 8.fErdinanD mArcOs Jr.
//
// Output
// Gloria Macapagal Arroyo
// Rodirgo Roa Duterte
// Benigno Simeon Aquino III
// Fidel V Ramos
// Ferdinand Marcos Jr
// -->

echo "Presidents: \n";
echo "\t 1.gLorIa mAcaPagal ArrOyo \n";
echo "\t 2.rOdrigo rOa Duterte \n";
echo "\t 3.benIgno sImeOn aQuino III \n";
echo "\t 4.bOng Go \n";
echo "\t 5.lEni RobredO \n";
echo "\t 6.fiDel v Ramos \n";
echo "\t 7.roBert seNya \n";
echo "\t 8.fErdinanD mArcOs Jr. \n";
echo "\nOutput \n\n";


$presidentCandidates = array("gLorIa mAcaPagal ArrOyo",
"rOdrigo rOa Duterte",
"benIgno sImeOn aQuino III",
"bOng Go",
"lEni RobredO",
"fiDel v Ramos",
"roBert seNya",
"fErdinanD mArcOs Jr."
);


$electedPresidents = array("Gloria Macapagal Arroyo",
"Rodrigo Roa Duterte",
"Benigno Simeon Aquino III",
"Fidel V Ramos",
"Ferdinand Marcos Jr"
);


function returnPresidentProperNames ($presidentCandidates, $electedPresidents ){

    for($i=0; $i < count($presidentCandidates); $i++){
        $condition = isPresident($electedPresidents, $presidentCandidates[$i]);
        if($condition){
            //echo "Became President " . toUpperCaseFirstLetter($presidentCandidates[$i]) . "\n";
            echo toUpperCaseFirstLetter($presidentCandidates[$i]) . "\n";
        }
    }

}

function isPresident($electedPresidents, $name){
   
    foreach($electedPresidents as $electedPresident){
        $name = preg_replace('/\W/','', $name); //remove non words
        $electedPresident= preg_replace('/\W/','', $electedPresident);
        if(strtolower($name) == strtolower($electedPresident)){
            return true;
        }
    }
    return false;
}

function toUpperCaseFirstLetter($inputName){
    $initialNameFormat = ucwords(strtolower($inputName));
    $nameData = preg_split('/\s+/', $initialNameFormat ); //split into an array space as separator
    $lastName = $nameData[count($nameData) - 1];
    $nameData[count($nameData) - 1] = formatSuffixNumber($lastName);
    $newName = implode(" ", $nameData);
    //echo " Final " . $newName . "\n";
    return $newName;
}



function formatSuffixNumber($formatSuffixName )
{   
    
    $nameNumberSuffix = array("I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X");
    $formatSuffixName = preg_replace('/\W/','', $formatSuffixName); 
    //echo "suffix " . $formatSuffixName;
    if(in_array(strtoupper($formatSuffixName),$nameNumberSuffix)){
        return strtoupper($formatSuffixName);
    }else{
        return $formatSuffixName;
    }  
         
}

returnPresidentProperNames($presidentCandidates, $electedPresidents);


?>