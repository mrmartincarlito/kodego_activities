<?php
/**
 * Peter already received his grades on 4th grade
 * Science is 95
 * Mateh is 88
 * Filipino is 97
 * English is 90
 * History is 89
 * 
 * Compute for the average score of Peter
 * 
 * Outpur is 91.8
 */

 $peterGrades = array(
    'Science' => 95,
    'Math' => 88,
    'Filipino' => 97,
    'English' => 90,
    'History' => 89,
 );

$total = 0;
foreach ($peterGrades as $key => $value) {
    echo "$key = $value" . '<br />';
    $total += $value;
}
echo '<br />';
echo '<br />';

// To check the number of index
echo count($peterGrades);
echo '<br />';
echo '<br />';
// To check the average score

$average = $total / count($peterGrades);

echo "Total average grade is " . $average; 