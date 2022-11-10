<?php

//activity 2

checkAccount("edson","Password1234");

function checkAccount($username,$password) {
    $defaultuser="edson";
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
        } else if ( $username == $defaultuser && $password !== $defaultpass) {
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
for ($i=0;$i<$x;$i++){
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
?>