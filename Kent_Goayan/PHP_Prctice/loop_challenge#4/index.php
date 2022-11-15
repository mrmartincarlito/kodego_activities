<?php 
function OddNumbers($num){
    for ($i = 0; $i <= $num; $i++) {
        if ($i % 2 === 0) {
            echo "$i \n";
        }
    }
}
OddNumbers(100)
?>