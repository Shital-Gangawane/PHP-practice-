<?php
    echo "<h1>Type Casting in PHP</h1>";
    echo "<br>";
    echo "<h2>string to integer</h2>";

    $age="25"; //string
     echo gettype($age); 
       echo "<br>";
    $age=(int)$age; //type casting string to integer.
    echo "The age is :". $age;
    echo "<br>";
     echo gettype($age); 
        echo "<hr>";

    echo "<h2> integer to string</h2>";
     echo gettype($age); //integer now
       echo "<br>";  
    $age=(string)$age; //type casting integer to string.
    echo "The age is:".$age;
    echo "<br>";
     echo gettype($age); //string now
    echo "<hr>";


    echo "<h2>float to integer</h2>";
    $price=499.99; //float
    echo gettype($price);
    echo "<br>";
    $price=(int)$price; // type casting float to integer.
    echo "The price is:".$price;
    echo "<br>";
    echo gettype($price); //integer now
    echo "<hr>";

    echo "<h2>integer to float</h2>";
    echo gettype($price);
    echo "<br>";
    $price=(float)$price; // type casting integer to float.
    echo "The price is:".$price;
    echo "<br>";
    echo gettype($price); //float now
    echo "<hr>";

    echo "<h2>integer to boolean</h2>";
    $number=1; //integer
    echo gettype($number);
    echo "<br>";
    $number=(bool)$number; // type casting integer to boolean.
   var_dump($number);
    echo "<hr>";

     echo "<h2>string to boolean</h2>";
    $name="shital"; //string
    echo gettype($name);
    echo "<br>";
    $name=(bool)$name; // type casting integer to boolean.
   var_dump($name);
    echo "<hr>";
    


?>  