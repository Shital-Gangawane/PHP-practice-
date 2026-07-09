<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Form</title>
</head>
<body>
    <h2>POST Form</h2>
    <form action="" method="post">
        User Name:
        <input type="text" name="name"><br><br>
        Password:
        <input type="password" name="pass"><br><br>
        <input type="submit" name="Submit">

    </form>
<?php 
    if(isset($_POST["name"]))
        {
            echo "<h4>User login successfully</h4>";
            echo "Welcome " .$_POST["name"];
           
        }
?>

</body>
</html>