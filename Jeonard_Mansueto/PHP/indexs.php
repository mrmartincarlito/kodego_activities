<?php


checkUserpass("jeonards","saviench123");

function checkUserpass($user,$password) {
    $defaultuser="jeonard";
    $defaultpassword="saviench123";

    if ($user===$defaultuser && $password===$defaultpassword){
    echo "Succesfully login ". ucfirst($user). " Mansueto";
} 
elseif ($user===$defaultuser && $password!==$defaultpassword){
    echo "Password does not match! ";
    errorpass( "Remember your Password");

}
    elseif ($user!==$defaultuser && $password===$defaultpassword){
      echo "username does not match! ";
      greethello("remember your username");
}
else {
    echo "user and password dos not exist ";
    signup(" Signup as Guest");
 
}
}

function greetHello($name){
    echo "Please ".ucfirst($name);
}

function signup($guest){
    echo "Hello ".lcfirst($guest);
}
function errorpass($error){
    echo "Think ".lcfirst($error);
}


echo "<br>";

$num1 = 8;
$num2 = 4;
operation(8,4,"+");
function operation($num1,$num2,$operation){
$a= $num1 +  $num2;
$s= $num1 -  $num2;
$m= $num1 *  $num2;
$d= $num1 /  $num2;

if($operation=="+"){
echo " Sum is ". $a;
}
elseif ($operation=="-"){
    echo " Difference is ". $s;
}
elseif ($operation=="*"){
    echo " Product is ". $m;
}
elseif ($operation=="-"){
    echo " Quotient is ". $d;
}
else{
    echo " Operation not found";
}

}


echo "<br>";

$x=3;
for ($i=0; $i<5; $i++ ) {
 $x = $x * $i;
    
}
echo $x;


echo "<br>";

$x=100;
for($i=0;$i<5;$i++ ){
    if($i==0) {
        continue;
    }
    $x=$x/$i;
}
echo "Quotient is: $x";


echo "<br>";


even(20);
function even($x){
    for($i=1; $i<= $x; $i++) {
    if ($i % 2 == 0){
     echo "$i <br>" ;   }
}
}

echo "<br>";

odd(16);
function odd($x){
    for($i=1; $i<= $x; $i++) {
    if ($i % 2 != 0){
     echo "$i <br>" ;   }
}
}


echo "<br>";


addevenodd(1000);
function addevenodd($x) {
    $even=0;
    $odd=0;
    for($i=1; $i<=$x; $i++) {
        if ($i % 2 == 0){
         $even=$even + $i ;   }
    
         else {
            $odd=$odd + $i;
         }
    }
    echo "sum of all even: ". number_format($even, );
    echo "<br>";
    echo "sum of all odd: ". number_format($odd, );

}

echo "<br>";


 
$Nums = array(20, 30, 40, 8, 3);
$sum=0;
foreach ($Nums as $num) {
  echo $num. "<br>" ;
  $sum=$sum + $num;
}

echo "The sum is: $sum";




echo "<br>";

$savienchGrades = array(
    "Science" => 95,
    "Math" => 88,
    "Filipino" => 97,
    "English" => 90,
    "History" => 89
  );
  
  $total = 0;
  foreach ($savienchGrades as $savienchGrade) {
    $total =$total + $savienchGrade; 
  }
  
  $average = $total / count($savienchGrades);
  
  echo "Saviench grade is $average";




echo "<br>";

$prints= array(35, -9,-400,78,-300,900,-200,1500);
foreach ($prints as $print )
if ($print<0){
    echo $print."<br>";
}

echo "<br>";

$set1 = array(10, 17, 107, 12, 2);
$set2 = array(10, 8, 107, 0, 4);
for ($i = 0; $i==($set1); $i++) {
    if ($set1[$i] !== $set2[$i]) {
        echo $set1[$i]."<br>";
    }
}



?>