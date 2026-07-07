<?php

echo "<h2>student List</h2>";

$students =[
    ["id"=>1, "name"=>"Shital", "course"=>"PHP"],
    ["id"=>2, "name"=>"rahul", "course"=>"HTML"],
    ["id"=>3, "name"=>"prity", "course"=>"JAVA"]

];
foreach($students as $std)
    {
        echo "ID :". $std['id']."<br>";
        echo "NAME :". $std['name']."<br>";
        echo "COURSE :". $std['course']."<br>";
        echo "<hr>";
    }

?>