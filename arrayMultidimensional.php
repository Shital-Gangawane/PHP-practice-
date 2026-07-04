<?php
$students=[
    [
        "name" => "Shital",
        "age" => 27,
        "city" => "CSN"
    ],
    [
        "name" => "John",
        "age" => 30,
        "city" => "NYC"
    ]
];
echo "Name:" .$students[0]["name"]; //$students[0]["name"];0th index of 0th array then 2nd zero for name key of 0th array
echo "<br>";
echo "City:" .$students[0]["city"]; //$students[0]["city"];0th index of 0th array then 2nd zero for city key of 0th array
echo "<br>";

echo "Name:" .$students[1]["name"]; //$students[1]["name"];0th index of 0th array then 2nd zero for name key of 0th array
echo "<br>";
echo "City:" .$students[1]["city"]; //$students[1]["city"];0th index of 0th array then 2nd zero for city key of 0th array

echo "<br>";

//another way to create multidimensional array is by using index array.
$students=[
    ["Shital",27,"JAVA"],
    ["priya",26,"PHP"]
];

echo "<br>";
echo $students[0][0];
echo "<br>";
echo $students[0][2]
?>