<?php

if (isset($_GET['user_id'])){

    $id = $_GET['user_id'];
    require 'dbconnect.php';

    $query = "DELETE FROM users WHERE user_id=$id";

    $result = mysqli_query($conn, $query);

    if($result){
        header("location:TableUser.php");
        
    }
    else{
        echo "Something went wrong!";
        echo mysqli_error($conn);
    }
}
else{
    header("location:front_page.php");
}


?>