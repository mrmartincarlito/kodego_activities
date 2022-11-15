<?php

braiNumber(20,10);
function braiNumber($even,$odd)

{
    $total = 0;
    $number = 0;
    $total2 = 0;
    $number2 = 0;

for ($i = 1; $i <= $even; $i++) 
  
    {  if ($i % 2 == 0) 

        {  echo "$i <br/>";   } 
    }

 
 while ($number <= $even)
    {
        if ($number % 2 == 0)

        {  $total = $total + $number; }

        $number++;
    }     echo " <br/> The sum of Even Number: $total <br/><br/>";
     

for ($i = 1; $i <= $odd; $i++) 
      
        {  if ($i % 2 == 1) 
    
            {  echo "$i <br/>";   }
        }   
       
 while ($number2 <= $odd)
        {
            if ($number2 % 2 == 1)
    
            {  $total2 = $total2 + $number2; }
    
            $number2++;
        }     echo " <br/> The sum of Odd Number: $total2";
}
?>