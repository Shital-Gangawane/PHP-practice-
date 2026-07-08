<?php

echo "<h2> Types of User Defined functions</h2>";

// 1. Without parameter and without return

echo "<h3>1. Without parameter and without return</h3>";
 function hello() 
 {
    echo "Hello Shital";
 }
 hello();

 echo "<br>";

 // 2. With parameter and witghout retrun type

 echo "<h3>2. With parameter and without return type</h3>";
 
 function greet($name) // parameter
 {
    echo "Welcome " . $name . "<br>";
 }
 greet("Shital"); //provide value to $ name function.
echo "<br>";

// 3. Without parameter but with return

echo "<h3>3. Without parameter but with return</h3>";

function getMessage()
{
   return "Good morning"; //return value to getMessage() function.
}
echo getMessage(); //function call 
 echo "<br>";

 // 4. With parameter and return
 echo "<h3>4. With parameter and return</h3>";

 function add($a, $b)
{
    return $a + $b;
}

echo "Addition of 10 and 20 : " . add(10, 20);
 echo "<br>";

 //Default parameter
 echo "<h3>Default parameter</h3>";

 function user($name ="guest user")
 {
    echo "Hello $name <br>";
 }
 user();
 user("Shital login");
?>