<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mon";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn)
    {
        echo "success";
    }
    else {
        echo "failed";
    }

    $query = "CREATE TABLE NAMES (
        id_name int(11),
        first_name varchar(20)
        )";

    $result = mysqli_query($conn, $query);

    if ($result)
    {
        echo "Created Table";
    }
    else {
        echo "no create table";
    }


    


?>
    
</body>
</html>