<?php
function getSum($num)
{
    $sumEven = 0;
    $sumOdd = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 === 0) {
            $sumEven += $i;
        }
        if ($i % 2 !== 0) {
            $sumOdd += $i;
        }
    }
    echo "Sum of even numbers from 1-$num is <strong>$sumEven</strong>. Sum of odd numbers from 1-$num is <strong>$sumOdd.</strong>";
}
getSum(20);
