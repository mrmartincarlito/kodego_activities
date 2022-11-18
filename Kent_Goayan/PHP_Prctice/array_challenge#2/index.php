<?php 
$array1 = array(3, 7, 9, 12, 6);
$array2 = array(9, 8, 6, 3, 4);
for($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] + $array2[$i];
    echo "<br>";
}
?>