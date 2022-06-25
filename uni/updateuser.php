<?php

if(isset($_GET['user_id'])){
    require 'dbconnect.php';
    $id = $_GET['user_id'];
    $name = $_POST['user_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $type = $_POST['type'];

    $query = "UPDATE users SET user_name='$name', phone='$phone', address='$address', email='$email', type='$type'  WHERE user_id=$id";

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