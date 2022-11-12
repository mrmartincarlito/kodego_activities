<?php

//activity 2

checkAccount("edson123","Password1234");

function checkAccount($username,$password) {
    $defaultuser="edson123";
    $defaultpass="Password1234";

        if ( $username == $defaultuser && $password == $defaultpass) {
            if (preg_match('/[0-9]/',$username))
            {
                echo "Cannot Greet unknown Name";
            } 
            else{
                echo "Hello " . ucfirst($username);
            }
        } else if ( $username == $defaultuser && $password !== $defaultpass){
            echo "Wrong password! Please try again";
        } else if ( $username !== $defaultuser && $password == $defaultpass) {
            echo "Wrong username! Please try again";
        } else {
            echo "Account does not exist";
        }
}

//activity 3

calculateNum(6,2,"*");

function calculateNum($num1,$num2,$operator){
    $output=0;
    $add="+";
    $minus="-";
    $multiply="*";
    $divide="/";

    if ($operator==$add){
        $output=$num1+$num2;
    } else if ($operator==$minus){
        $output=$num1-$num2;
    } else if ($operator==$multiply){
        $output=$num1*$num2;
    } else if ($operator==$divide){
        $output=$num1/$num2;
    } else {
        echo "Operation not found";
    }
    echo "<br>\n";
    echo $output;
}

//assignment for loops

oddEven(20);
function oddEven($x){
    $sumodd=0;
    $sumeven=0;
for ($i=0;$i<=$x;$i++){
    if($i % 2 == 0){
        $sumeven=$sumeven+$i;
        }
    else{
        $sumodd=$sumodd+$i;   
    }
}
echo "<br>\n" ."The total of all even numbers in ". $x ." is ".$sumeven ."<br>\n";
echo "The total of all odd numbers in ". $x ." is ".$sumodd ."<br>\n";
}

$nums =array(3,7,9,12,6);
$nums2=array(9,8,6,3,4);
$numtotal=0;
for ($i=0;$i<count($nums);$i++){
   echo $nums[$i]+$nums2[$i]."<br>\n";
}





$subjectgrades =array(
 
    "Science"=>95,
    "Math"=>88,
    "Filipino"=> 97,
    "English"=>90,
    "History" =>89,
);
$gradeTotal=0;

foreach ($subjectgrades as $grades){
    $gradeTotal+=$grades;
}
$average=$gradeTotal/count($subjectgrades);
echo "<br>\n".$average;

$nums = array ( 10,20,36,70,90);

$nums2 = array ( 7,20,2,8,90);

for($i=0;$i<count($nums);$i++) {
    if ($nums[$i]===$nums2[$i]) {
    echo "<br>\n" ."Same index same value".$nums[$i] ."<br>\n";
}
}

//Assignement Nov 12, 2022
$groceries = array(
    array(
        "desc"=>"Item1",
         "qty"=> 2,
         "cost"=> 100,
    ),
    array(
        "desc"=>"Item2",
         "qty"=> 7,
         "cost"=> 35,
    ),
    array(
        "desc"=>"Item3",
         "qty"=> 1,
         "cost"=> 350,
    ),
    array(
        "desc"=>"Item3",
         "qty"=> 2,
         "cost"=> 20,
    ),
);
$tcost=0;
$sumAll=0;

echo "<br> \n QTY  |  DESC  |  AMT  |  Total  <br>\n";
echo"---------------------------------<br>\n";
foreach($groceries as $grocery){
    $tcost=$grocery["cost"] *$grocery["qty"]  ;
    $sumAll+=$tcost;
    if (($grocery["cost"])>99){
    echo "(".$grocery["qty"] .")....." .$grocery["desc"] ."  \t ... " .$grocery["cost"] ."   \t.....  " .$tcost ."  <br>\n";
    }else {
    echo "(".$grocery["qty"] .")....." .$grocery["desc"] ."  \t ..... " .$grocery["cost"] ."   \t.....  " .$tcost ."  <br>\n";
    }
}

echo"---------------------------------<br>\n";
echo"Overall Total \t \t..............." .$sumAll;
?>