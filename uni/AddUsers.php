<?php
require 'dbconnect.php';

echo $_GET['user_name'];
echo $_GET['passwords'];
echo $_GET['phone'];
echo $_GET['address'];
echo $_GET['email'];
echo $_GET['type'];

$user_name = $_GET['user_name'];
$passwords = $_GET['passwords'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$email = $_GET['email'];
$type = $_GET['type'];

$query = "INSERT INTO users (user_name, passwords, phone,address,email,type) VALUES ('$user_name', '$passwords', '$phone','$address','$email', '$type')";

$result = mysqli_query($conn, $query);

if($result){
    echo "Users added successfuly";
    header("location:login.php");
}
else{
    echo "Something went wrong!";
    echo mysqli_error($conn);
}


?>