<?php

//Challenge #1
$x = 3;

function newSum($number){

    for($i =0; $i<=4; $i++){
        echo "counter $i ";
        echo "number = $number \n";
        $number += $i;
        
    }

    echo "New sum $number";

}

//newSum($x);

//Challenge #2
function newProduct($x){
    for($i=1; $i<=5; $i++){
        echo "Counter $i  $i x $x = ", $x *= $i,"\n";
    }
 }
 
 //newProduct($x);
 
 //Challenge #3
 //Create a function to calculate the new qoutient value of x
 //When x=100 in 5 iterations exclude the 1st iteration

 function newQuotient($x){
    for($i=0; $i<=4; $i++){
        if($i == 0){
            continue;
        }else{
            echo "Counter $i  $i / $x = ", $x /= $i,"\n";
        }
    }
 }
 
 //newQuotient(100);
 
 
 //Challenge #4
 //Create a function to print all odd numbers from 1 to a positive
 //number given.

 function printAllEvenToAGiven($givenNum){
    $i = 1;
    while($i < $givenNum){
        if($i == 1){
            echo "$i \n";
        }
        else if($i % 2 == 0){
             echo "$i \n"; 
        }

        $i++;
    }
 }
 
 function printAllOddToAGiven($givenNum){
    $i = 1;
    while($i < $givenNum){
      if($i % 2 != 0){
             echo $i . " \n"; 
        }
        $i++;
    }
 }

 //printAllOddToAGiven(100);

 //Challenge #4
 //Create a function to compute for the sum of all even and all odd numbers
 //from 1 to a positive number;
 
 function computeSumOfAllOddEvenNumbersToAGivenNumber($number){
        $totalOdd = 0;
        $totalEven = 0;
        echo " 1 to given (+) number " . $number . "\n";
        for($i=1;$i<=$number;$i++){
            if($i % 2 == 0){
               $totalEven+=$i; 
               echo " Number # $i is Even : Sum Total Even --> $i + ", $totalEven-$i, " = $totalEven \n";  
            } 
            else 
            {
                 $totalOdd+=$i;
                 echo " Number # $i is Odd  : Sum Total Odd  --> $i + ", $totalOdd-$i, " = $totalOdd \n";  
            }
        }
        
        echo " Grand Sum Total Odd  : $totalOdd given +number : $number  \n";
        echo " Grand Sum Total Even : $totalEven given +number : $number  \n";
 } 
  $number = 10;
  computeSumOfAllOddEvenNumbersToAGivenNumber($number);
?>