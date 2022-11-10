<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function oddNumber ($even, $odd) {

  for( $i=0; $i <= $even; $i++ )
  { 
      if( $i % 2 == 0 ){
          $i = $i + $i;
      }

  }

  for( $i2=0; $i2 <= $odd; $i2++ )
  { 
      if( $i2 % 2 != 0 ){
          $i2 = $i2 + $i2;
      }

  }
  echo "$i <br>";
  echo "$i2";
}

oddNumber(20, 20);

</body>
</html>