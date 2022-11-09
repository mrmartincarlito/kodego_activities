<?php


checkuserpass("jeonard","saviench123");

function checkuserpass($user,$password) {
    $user="jeonard";
    $password="saviench123";

    if ($user==="jeonard" && $password==="saviench123"){
    echo "Succesfully login ". ucfirst($user). " Mansueto";
} 
elseif ($user==="jeonard" && $password!=="saviench123"){
    echo "Password does not match! ";
    errorpass( "Remember your Password");

}
    elseif ($user!=="jeonard" && $password==="saviench123"){
      echo "username does not match! ";
      greethello("remember your username");
}
else {
    echo "user and password dos not exist ";
    signup(" Signup as Guest");
 
}
}

function greethello($name){
    echo "Please ".ucfirst($name);
}

function signup($guest){
    echo "Hello ".lcfirst($guest);
}
function errorpass($error){
    echo "Think ".lcfirst($error);
}




$num1 = 8;
$num2 = 4;
operation(8,4);
function operation($num1,$num2){
$a= $num1 +  $num2;
$s= $num1 -  $num2;
$m= $num1 *  $num2;
$d= $num1 /  $num2;
$operation="divide";

if($operation=="add"){
echo " Answer is ". $a;
}
elseif ($operation=="subtract"){
    echo " Answer is ". $s;
}
elseif ($operation=="multiply"){
    echo " Answer is ". $m;
}
elseif ($operation=="divide"){
    echo " Answer is ". $d;
}
else{
    echo " Operation not found";
}

}


?>