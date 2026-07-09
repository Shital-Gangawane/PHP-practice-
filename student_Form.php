<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Detail Form</h2>
    <form action="" method="post">
        Student Name:
        <input type="text" name="name"><br><br>
        Email:
        <input type="email" name="email"><br><br>
        Course:
        <input type="text" name="course"><br><br>
        <input type="submit" name="submit" value="save">
        <input type="reset" name="cancel" value="cancel">


    </form>
<?php 
    if(isset($_POST['submit'])) 
        {
            echo "<h3>Student Details</h3>";
            echo "Name:". $_POST['name']."<br>";
            echo "Email:". $_POST['email']."<br>";
            echo "Course:". $_POST['course']."<br>";
        }
?>

</body>
</html>