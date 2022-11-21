<?php

function listOfPresidents(){
    $presidents = [
        "gLoria mAcaPagal ArrOyo",
        "rOdrigo rOa Duterte",
        "benigno simeOn aQuino III",
        "bong Go",
        "lEni RobredO",
        "fiDel v Ramos",
        "roBert seNya",
        "fErdinanD mArcos Jr."
    ];

    foreach($presidents as $i => $president){        
        if($i <= 2 || $i == 5 || $i == 7) {
            if($i == 2){
                echo str_replace("Iii", "III", ucwords(strtolower($president)))."<br>";
            }else {
                echo ucwords(strtolower($president))."<br>";
            }
            
        }
    }
}
listOfPresidents();
?>