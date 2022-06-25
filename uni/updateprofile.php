<?php
if (isset($_GET['user_id'])){

    require 'dbconnect.php';
    $id = $_GET['user_id'];
    $sql= "SELECT *  FROM users where user_id = '$id'";
        
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
    
    }


echo $_GET['user_name'] . "<br>";
echo $_GET['phone'] . "<br>";
echo $_GET['email'] . "<br>";
echo $_GET['address'] . "<br>";
echo $_GET['user_id'] . "<br>";




$name= $_GET['user_name'];
$phone= $_GET['phone'];
$email= $_GET['email'];
$address = $_GET['address'];
$user_id= $_GET['user_id'];



$query = "UPDATE users 
set user_name = $name , phone = $phone , email = $email , address = $address 
where user_id = $user_id
";
 

$result = mysqli_query($conn, $query);

if($result){
    echo "Job added successfuly";
}
else{
    echo "Something went wrong!";
    echo mysqli_error($conn);
}



?>