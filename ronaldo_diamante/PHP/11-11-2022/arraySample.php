<?php

/***
 
Syntax
    foreach ($array as $value) {
    code to be executed;
    }
 
 */


$nums = array(2, 6, 10, 4.5, 'me');
echo $nums[0] . '<br />';
echo $nums[1] . '<br />';
echo $nums[2] . '<br />';


echo '<br />';

foreach ($nums as $num) {
    echo $num . '<br />';
}

echo '<br />';

for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . '<br />';
}