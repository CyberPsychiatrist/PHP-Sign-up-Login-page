<?php
function check_login($con)
{
    if (isset($_SESSION['user_id']))     //checking inside session if there is user_id
    {
        $id = $_SESSION['user_id'];
        //check in the database
        $query = "select * from users where user_id = '$id' limit 1";

        //read from database
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);       //assoc for associative array
            return $user_data;
        }
    }
    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)   //user_id length
{
    $text = "";
    if ($length < 5) {          //to make sure its never less then 5
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {

        $text .= rand(0, 9);
    }
    return $text;
}
