<?php

$percentage =90.5;
var_dump(is_float($percentage));  //is_float() function is used to check whether the variable is float or not.
echo "<br>"; 
var_dump($percentage);
echo "<br>";
echo gettype($percentage);  //gettype() function is used to check the data type of variable.
//output is bool(true) because the variable is float.
?>