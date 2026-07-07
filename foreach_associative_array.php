<?php
 
 echo "<h2>foreach_associative_array</h2>";

 $student =[
    "Name" => "Shital",
    "course" =>"PHP",
    "city" => "CSN"
 ];

 foreach($student as $key =>$value) // student=array, "name","course" and "city" is key and "shital. PHP, CSN " is value.
    {
        echo $key . ":" . $value ."<br>";
    }
?>