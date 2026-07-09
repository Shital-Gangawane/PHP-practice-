<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Form</title>
</head>
<body>
    <h2>GET Form</h2>
    <form action="" method="get">
        <input type="text" name="name" placeholder="Enter Name"> <br><br>
        <input type ="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="number" name ="phoneNo" placeholder="Enter your phone number"require><br><br>
        <input type="password" name="pass" placeholder="Enter password" minlength="4" required><br><br>
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name ="cancel"> 
    </form>

    <?php
if(isset($_GET["name"]))
    {
        echo "<h3>Student details</h3>"."<br>";
        echo "Welcome " .$_GET["name"]."<br>";
        echo "Name: " .$_GET["name"]."<br>";
        echo "Email: " .$_GET["email"]."<br>";
        echo "Phone number: " .$_GET["phoneNo"]."<br>";
        echo "password: " .$_GET["pass"]."<br>";

    }

?>

</body>
</html>

