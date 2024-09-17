<?php


braiOddnumber(10);

function braiOddnumber($num)
{
 
    for ($i = 1; $i <= $num; $i++) 
  
    {  if ($i % 2 == 1) 

        {  echo "$i <br/>";   }
    }   
}


?>