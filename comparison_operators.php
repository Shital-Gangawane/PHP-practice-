<?php

$a = 10;
$b = "10";

echo "<h2>Comparison Operators in PHP</h2>";

echo "<h3>Equal (==)</h3>";
echo "== : ";
var_dump($a==$b); //Equal operator checks whether the values of two operands are equal or not. If yes, then it returns true otherwise false.

echo "<h3>Identical (===)</h3>";
echo "=== :";
var_dump($a===$b); //Identical operator checks wether the values and data types of two operands are equal or not. If yes then it returns true otherwise false.

echo "<h3>Not Equal (!=)</h3>";
echo "!= :";
var_dump($a != $b); //Not equal operator checks wether the values of two operands are equal or not. If values are not equal then it returns true otherwise false.

echo "<h3>Not Identical (!==)</h3>";
echo "!== :";
var_dump($a !== $b); //Not identical operator checks wether the values of two operands are equal or not and also check the data types of two operands. if values and data types are not equal then it returns true otherwise false.

echo "<h3>Greater than (>)</h3>";
echo "> :";
var_dump($a > $b); // Greater than operator checks wether the value of left operand is greater than the value of right operand. if yes then it returns true otherwise false.

echo "<h3>Less than (<)</h3>";
echo "< :";
var_dump($a < $b); //Less than operator checks wether the value of left operand is less than the value of right operand. if yes than it returns true otherwise false.

echo "<h3>Greater than or equal to (>=)</h3>";
echo ">= :";
var_dump($a >= $b); //Greater than or equal to operator checks wether the value of left operand is greater than or equal to the value of right operand. if yes then it returns true otherwise false.

echo "<h3>Less than or equal to (<=)</h3>";
echo "<= :";
var_dump($a <= $b); //Less than or equal to operator checks wether the value of left operand is less than or equal to the value of right operand. if yes then it returns true otherwise false.

?>