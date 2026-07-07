<?php

$age =25;
$degree=true;

if($age>=18)
    {
        if($degree)
            {
                echo "Eligible for Interview";
            }
            else{
                echo "Degree required";
            }
    }
    else{
        echo "Age must be 18 or above";
    }

?>