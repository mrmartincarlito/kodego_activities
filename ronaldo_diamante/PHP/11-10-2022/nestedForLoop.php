<?php
for($idx1 = 0; $idx1 <=5; $idx1++) {
    for($idx2 = 5; $idx2 > 0; $idx2--) {
        echo "Index 1 = $idx1 | Index 2 = $idx2 <br>";
    }
    echo "<br>";
}

echo '<br />';
echo '<br />';


$num1 = 3;
for($idx1 = 0; $idx1 <=5; $idx1++) {
    for ($idx2 = 0; $idx2 <=5; $idx2++) {
        echo "$num1 = $idx1 + $idx2 <br>";
    }
}

echo $num1;