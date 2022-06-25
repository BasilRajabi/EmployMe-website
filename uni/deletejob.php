<?php

if (isset($_GET['job_id'])){

    $id = $_GET['job_id'];
    require 'dbconnect.php';

    $query = "DELETE FROM jobs WHERE job_id=$id";

    $result = mysqli_query($conn, $query);

    if($result){
        header("location:front_page.php");
        
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