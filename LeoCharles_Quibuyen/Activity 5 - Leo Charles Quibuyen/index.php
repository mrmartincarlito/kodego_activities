<php?
<?php
$names = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "bOng Go",
    "lEni RobredO",
    "fiDel v. Ramos",
    "roBert seNya",
    "fErdinanD mArcOs Jr.",

);
$presidents = array(
    "gLorIa mAcaPagal ArrOyo",
    "rOdrigo rOa Duterte",
    "benIgno sImeOn aQuino III",
    "fiDel v. Ramos",
    "fErdinanD mArcOs Jr.",

);
displayProperName($names, $presidents);
function displayProperName($names, $presidents){

        foreach ($presidents as $president){
            if(strpos($president, $president) !==false){
                $president = implode($president, array_map("ucwords",
                explode($president, $president)));
            }
            $president = ucwords(strtolower($president));
            echo $president . "<br>";
        }

}


?>
