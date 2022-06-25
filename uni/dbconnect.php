<?php
$servername = "localhost";
$username= "uni_uswer";
$password = "bakir123456";
$database = "university";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Can't connect to database " . mysqli_connect_error());
}


?>