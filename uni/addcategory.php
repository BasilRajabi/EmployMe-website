<?php
require 'dbconnect.php';

echo $_GET['name'];


$user_name = $_GET['name'];

$query = "INSERT INTO category (name) VALUES ('$user_name')";

$result = mysqli_query($conn, $query);

if($result){
    echo "Category added successfuly";
    header("location:front_page.php");
}
else{
    echo "Something went wrong!";
    echo mysqli_error($conn);
}


?>