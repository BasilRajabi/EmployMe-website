<?php

if(isset($_GET['job_id'])){
    require 'dbconnect.php';
    $id = $_GET['job_id'];
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $shift_time = $_POST['shift_time'];
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $REVEIW = $_POST['REVEIW'];

    $query = "UPDATE jobs SET job_title='$job_title', company_name='$company_name', shift_time='$shift_time', city='$city', salary='$salary', REVEIW='$REVEIW'  WHERE job_id=$id";

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