<?php
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