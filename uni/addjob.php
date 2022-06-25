<?php
require 'dbconnect.php';


echo $_GET['company_name'] . "<br>";
echo $_GET['category_id'] . "<br>";
echo $_GET['job_title'] . "<br>";
echo $_GET['shift_time'] . "<br>";
echo $_GET['city'] . "<br>";
echo $_GET['description'] . "<br>";
echo $_GET['salary'] . "<br>";
echo $_GET['featured'] . "<br>";
echo $_GET['user_id'] . "<br>";



$company_name= $_GET['company_name'];
$category_id= $_GET['category_id'];
$job_title= $_GET['job_title'];
$shift_time = $_GET['shift_time'];
$city= $_GET['city'];
$description= $_GET['description'];
$salary= $_GET['salary'];
$featured= $_GET['featured'];
$user_id= $_GET['user_id'];



$query = "INSERT INTO jobs (company_name,  category_id, job_title, shift_time, city, description, salary, featured,  user_id) VALUES ('$company_name', '$category_id', '$job_title', '$shift_time',  '$city', '$description', '$salary', '$featured',  '$user_id' )";

$result = mysqli_query($conn, $query);

if($result){
    echo "Job added successfuly";
    header("location:login.php");
    
}
else{
    echo "Something went wrong!";
    echo mysqli_error($conn);
}



?>