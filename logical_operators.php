<?php

$age =25; //integer
$citizen =true; //boolean

echo "<h2>Logical Operators in PHP</h2>";

echo "<h3>Logical AND (&&): </h3>";
var_dump($age >=18 && $citizen); //Logical AND oprator checks wether both the conditions are true or not. If both the conditions are true then it returns true otherwise false.

echo "<h3>Logical OR (||): </h3>";
var_dump($age <18 || $citizen); // Logical OR operator checks wether any one of the conditions is true or not. If any one of the condition is true then it returns true otherwise false.

echo "<h3>Logical NOT (!): </h3>";
var_dump(! $citizen); //Logical NOT operator is used to return the opposite boolean value of the variable. If the value of the variable is true then it returns false otherwise true.

?>