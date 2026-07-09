<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

<form method="post">

Name :
<input type="text" name="name"><br><br>

<input type="submit" name="submit">

</form>

<?php
if(isset($_POST['submit']))
    {
        if(empty($_POST['name']))
            {
                echo "Name is required.";
            }
            else{
                echo "Welcome ". $_POST['name'];
            }
    }
?>
</body>
</html>