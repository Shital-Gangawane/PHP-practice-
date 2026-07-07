<?php

$a =10; 

echo "<h2>Increment and Decrement Operators in PHP</h2>";
 
echo "Initial value of a is : $a <br>";

echo "Pre increment :" .(++$a); //pre increment operator increases the value of variable by 1 before using it in expression.
echo "<br>";

echo "Post Increment :" .($a++); //Post increment operator increses the value of variable by 1 after the expresssion is evaluated.
echo "<br>";

echo "Current value of a is : $a <br>";

echo "Pre decrement :" .(--$a); //pre decrement operator decreases the value of variable by 1 before using it in expression.
echo "<br>";

echo "Post decrement :" .($a--); //Post decrement decreses the value of variable by 1 after the expresion is evaluated.
echo "<br>";

echo "Final value of a is : $a";


?>