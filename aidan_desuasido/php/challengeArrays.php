<?php

//Nov.12.2022

//Challenge #5
//Mother's Grocery
$groceryItems = array(
    "ITEM 1" => array("QTY" => 2, "COST" => 100),
    "ITEM 2" => array("QTY" => 7, "COST" => 35),
    "ITEM 3" => array("QTY" => 1, "COST" => 350),
    "ITEM 4" => array("QTY" => 2, "COST" => 20)
);
$overallTotal = 0;
 echo "Output: \n";
 echo "QTY  DESC      AMT   TOTAL \n";
 echo ".......................... \n";
foreach($groceryItems as $item => $prop){
    //foreach($prop as $key => $val){
    //echo "Item and Properties $item => $key => $val \n";
    $strQTY_DESC = "(" . $prop["QTY"] . ")" .  $item . "  ";
    $strTotal = $prop["COST"]*$prop["QTY"];
    $overallTotal += $strTotal;
    $strCOST_TOTAL = "     " . $prop["COST"] . "  " . $strTotal; 
    echo $strQTY_DESC . $strCOST_TOTAL . "\n";
}
echo ".......................... \n";
echo "Overall Total:     Php " . $overallTotal . "\n";
echo "\n";


#challenge #5
//Given the set of numbers, Print all negative numbers
$numbers = array(3,3,-8,-100,20,90,0,-1);

foreach ($numbers as $num){
    if($num < 0){
        echo "Negative Number " . $num . "\n";
    }
}

//Challenge #6
//Given 2 ses of numbers
//Print all value with the same value of the same index
$set1 = array(10,20,35,70,90);
$set2 = array(7,20,2,8,90);
for($i=0; $i < count($set1); $i++){
    if($set1[$i] == $set2[$i]){
        echo "Index $i Same Index Same Value " . $set1[$i] . " \n";
    }
}

//Nov.11.2022
$haha = array(20,30,40,8,3);

$totalSum = 0;
for($i=0;$i<count($haha);$i++){ 
    $totalSum += $haha[$i];
}
echo "Total Sum : " . $totalSum . "\n";

//challenge 2
//given two sets of numbers of arrays
//compute for the sum of the same index of the 2 sets
$array1 = array(3,7,9,12,6);
$array2 = array(9,8,6,3,4);
$count = 0;
if(count($array1) == count($array2)){
    $count = count($array1);
}elseif(count($array1) > count($array2)){
    $count = count($array2);
}else{
    $count = count($array1);
}
for($i=0;$i< $count ;$i++){ 
    $sum = $array1[$i] + $array2[$i];
    echo "Sum of two sets index: $i " . $sum . "\n";
}

//challenge #3
//Peter receieved the 4th Grades
//Compute the Average Score of Peter
//Average is = 91.8
echo "challenge #3, Petter's Average 4th Q Grades.\n";
$petterGrade = array (
    "Science"   => 95,
    "Math"  => 88,
    "Filipino"  => 97,
    "English"  => 90,
    "History"  => 89);
$sum = 0;
$average = 0;
$lenght = count($petterGrade);
foreach ($petterGrade as $key => $value){
    echo "$key -> $value " . "\n";
    $sum += $value; 
    $average = $sum / $lenght;
}
echo "Petter's Total Subjects: " . $lenght . "\n";
echo "Total Sum of Grades: " . $sum . "\n";
echo "Average Grade is = " . $average . "\n";

?>