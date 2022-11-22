<?php

// Pythagorean Theorem /Defining Formula
//c**2 = a**2 + b**2

$a = 2;
$b = 4;

$d = 2; // exponent

$temporaryTotal = $a**$d + $b**$d;
$c = sqrt($temporaryTotal);
echo "The answer is: $c";