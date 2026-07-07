<?php

$name ="Shital";
$marks=430;
$total=500;

$percentage =($marks /$total)*100;

if($percentage >=75)
    {
        $grade ="A";
    }
    elseif($percentage >=60)
        {
            $grade ="B";
        }
        elseif($percentage >=35)
            {
                $grade ="C";
            }
            else
                {
                    $grade ="Fail";
                }

  echo "Name :". $name."<br>";  
  echo "Marks :". $marks. "<br>";
  echo "Percentage :". $percentage. "%<br>";
  echo "Grade :". $grade. "<br>";            

?>