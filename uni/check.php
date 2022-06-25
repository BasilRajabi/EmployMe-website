<?php
    
    require 'dbconnect.php';

    if (isset($_POST['user_name']) && isset($_POST['passwords'])){
        $username = $_POST['user_name'];
        $password = $_POST['passwords'];

        $query = "SELECT * FROM users WHERE user_name='$username' AND passwords='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0){
            echo "Welcome " . $username;
            setcookie("user_name", $username, time() + 10000);
            header("location:front_page.php");
        }
        else{
            echo "Invalid username or password!";
            header("location:login.php?error=1");
        }
    }

?>