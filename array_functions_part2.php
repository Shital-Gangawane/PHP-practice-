<?php
 
 $fruits =["apple", "banana", "mango", "grapes"];

 echo "<h1>Array Functions in PHP</h1>";

    echo "<h2>in_array()</h2>";

    if(in_array("banana", $fruits)){ //in_array() function is used to check whether the element is present in an array or not.
        echo "banana is present in the array";

    }
    else{
        echo "banana is not present in the array";
       }

       echo"<hr>";

       echo "<h2>array_search()</h2>";
       echo array_search("banana",$fruits); //array_search() function is used to search the element in an array and return the index of that element.

       echo"<hr>";

       echo "<h2>sort()</h2>";
       $numbers=[10,30,40,50,20];
       sort($numbers);  // sort() function is to sort the array in ascending order.
        print_r($numbers);

        echo"<hr>";

        echo "<h2>rsort()</h2>";
        rsort($numbers);  //rsort() function is used to sort the array in decending order.
        print_r($numbers);

        echo"<hr>";

        echo "<h2>asort()</h2>";
        $students=[
            "shital"=>95,
            "rahul"=>75,
            "priya"=>80
        ];
        asort($students); //asort() function is used to sort the array in ascending order according to the value of the array.
        print_r($students);

        echo"<hr>";

        echo "<h2>ksort()</h2>";
        ksort($students);  //ksort() function is used to sort the array in ascending alphabetical order according to the key of the array.
        print_r($students);

        ?>