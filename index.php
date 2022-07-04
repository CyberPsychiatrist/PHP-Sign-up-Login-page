<?php
session_start();
include("connection.php");
include("functions.php");

//Retaining user data
$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website.</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>this is the index page:</h1>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</body>

</html>