<?php
/**
Activity 5 Coding Challenge
Create a function that will return proper names of the president of the republic of the Philippines, exclude those who where not become a president
Presidents:
1.	gLorIa mAcaPagal ArrOyo
2.	rOdrigo rOa Duterte
3.	benIgno sImeOn aQuino III
4.	bOng Go
5.	lEni RobredO
6.	fiDel v Ramos
7.	roBert seNya
8.	fErdinanD mArcOs Jr.
Output
Gloria Macapagal Arroyo
Rodirgo Roa Duterte
Benigno Simeon Aquino III
Fidel V Ramos
Ferdinand Marcos Jr

 */

returnProperPresidentNames();

function returnProperPresidentNames() {

    $names = array(
        "gLorIa mAcaPagal ArrOyo" => "president", 
        "rOdrigo rOa Duterte" => "president", 
        "benIgno sImeOn aQuino III" => "president", 
        "bOng Go" => "honoroble",
        "lEni RobredO" => "honoroble", 
        "fiDel v Ramos" => "president",
        "roBert seNya" => "honoroble",
        "fErdinanD mArcOs Jr." => "president"
    );

    foreach ($names as $key => $value) {
        if ($value == 'president') {
                echo ucwords(strtolower($key)). '<br />';

                // if (str_word_count($key) <= 4) {
                //     echo ucwords(strtolower($key)) . '<br />';
                // } 
            }

    }



}
























?>