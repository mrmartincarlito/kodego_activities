<?php
	
function presidentsPhilippines(){

$presidents =array("Gloria Macapagal Arroyo", "Rodrigo Roa Duterte", "Benigno Simeon Aquino III", "Fidel V Ramos", "Ferdinand Marcos Jr.");
$arraylength = count($presidents);

for($i= 0; $i < $arraylength; $i++) {
  echo ucwords($presidents[$i]);
  echo "<br>";
  }
}
presidentsPhilippines();



?>