
<!-- Create a function to calculate 2 given numbers based on the arithmetic operators given
Scenarios
1. If operator is "+" add the 2 numbers print the sum
2. If operator is "-" subtract the 2 numbers print the difference
3. If operator is "*" multiply the 2 numbers print the product
4. If operator is "/" divide the 2 number print the quotient
5. If operator is none of the above print "Operation not found" -->

<?php
function calculate($num1, $num2, $operator){
    if($operator === '+') return $num1 + $num2;
    else if($operator === '-') return $num1 - $num2;
    else if($operator === '*') return $num1 * $num2;
    else if($operator ==='/') return $num1 / $num2;
    else return 'Operation not found';
}
echo calculate(8, 8, "*");
?>
