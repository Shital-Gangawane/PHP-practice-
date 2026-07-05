<?php

echo "<h1>Array Functions in PHP</h1>";

echo "<h2>count()</h2>";
$fruits = ["apple", "banana", "mango"];
print_r($fruits);
echo "<br>";
echo "count:" . count($fruits); //count() function is used to count the number of elements in an array.

echo "<hr>";

echo "<h2>print_r()</h2>";
print_r($fruits); //this function prints the complete sture of an array.

echo "<hr>";

echo "<h2>array_push()</h2>";
echo array_push($fruits, "orange"); //this function is to add new element at the end of array.
print_r($fruits);

echo "<hr>";

echo "<h2>array_pop()</h2>";
echo array_pop($fruits); //this function is use to remove the last element of an array.
print_r($fruits);

echo "<hr>";

echo "<h2>array_shift()</h2>";
echo array_shift($fruits); // this function is use to remove the first element of an array.
print_r($fruits);

echo "<hr>";

echo "<h2>array_unshift()</h2>";
echo array_unshift($fruits, "graps", "apple"); //this function is used to add new one or more elements at the beginning of an array.
print_r($fruits);

echo "<hr>";

echo "<h2>array_merge()</h2>";
$frontend = ["HTML", "CSS", "JS"];
$backend = ["PHP", "JAVA", "PYTHON"];
$fullstack = array_merge($frontend, $backend);  //this funtion is used to merge two or more array.
print_r($fullstack);

?>
