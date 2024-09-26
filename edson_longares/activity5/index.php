<?php

$phPresidents=array(
    array(
        "fName"=>"gLorIa",
        "mName"=>"mAcaPagal ",
        "lName"=>"ArrOyo",
        "suffix"=>" ",
        "post"=>"President"
    ),
    array(
        "fName"=>"rOdrigo ",
        "mName"=>"rOa",
        "lName"=>"Duterte",
        "suffix"=>" ",
        "post"=>"President"
    ),
    array(
        "fName"=> "benIgno ",
        "mName"=>"sImeOn ",
        "lName"=>"aQuino",
        "suffix"=>"III",
        "post"=>"President"
    ),
    array(
        "fName"=>"bOng",
        "mName"=>" ",
        "lName"=>" Go",
        "suffix"=>" ",
        "post"=>"Senator"
    ),
    array(
        "fName"=>"lEni",
        "mName"=>" ",
        "lName"=>"RobredO",
        "suffix"=>" ",
        "post"=>"Vice President"
    ),
    array(
        "fName"=>"fiDel ",
        "mName"=>"v",
        "lName"=>"Ramos",
        "suffix"=>" ",
        "post"=>"President"
    ),
    array(
        "fName"=>"roBert",
        "mName"=>" ",
        "lName"=>"seNya",
        "suffix"=>" ",
        "post"=>"Actor"
    ),
    array(
        "fName"=>"fErdinanD",
        "mName"=>" ",
        "lName"=>"mArcOs",
        "suffix"=>"Jr",
        "post"=>"President"
    ),
);

properName($phPresidents);

function properName($listPresidents) {

    foreach($listPresidents as $president){
        if ($president["post"]=="President"){
            $name=strtolower($president["fName"])." " .strtolower($president["mName"])." " .strtolower($president["lName"])." ".$president["suffix"];
            echo ucwords($name)."<br>\n";
        }
        $i+=0;
    }

}

?>