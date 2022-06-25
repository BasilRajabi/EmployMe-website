<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="cssAddJob/style.css">
    <title>My Profile</title>
    <style>
        body{
            overflow-x: hidden;
        }
        /* .must {
            width: 200px;
             margin-right: 300px ; 
        } */
        button {
            font-size: 30px;
            margin-left: 10px;
    border-radius: 32px;
    width: 200px;
    background-color: lightblue;
    color: white;
}
nav {
    background-color: #4c5c68;
    width: 84%;
    margin: auto;
    height: 150px;
    padding: 20px 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.logo {
    width: 150px;
    height: 150px;
    cursor: pointer;
}

nav ul li {
    display: inline-block;
    list-style: none;
    margin: 10px 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 30px;
    font-family: inherit;
}

nav ul li a:hover {
    color: #a8c1e1;
}

.name {
    margin-right: 38%;
    font-size: 50px;
    color: #a8c1e1;
    font-family: inherit;
}
    </style>
</head>

<body>

<?php

if (isset($_GET['user_id'])){

require 'dbconnect.php';
$id = $_GET['user_id'];
$sql= "SELECT *  FROM users where user_id = '$id'";
    
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);

}

// else
// {
//     header("location:front_page.php");
// }
 $uname = $_COOKIE['user_name'];
// echo $uname;

$query = " SELECT user_name , user_id , phone , address , email FROM users WHERE user_name = '$uname' ";

$result2 = mysqli_query($conn, $query);


 $row2 = mysqli_fetch_array($result2);

 $sendid = $row2['user_id'];
 //echo $row2['user_name'] ;
// echo $row2['user_id'];
            
 

?>


<div class="root">
        <div class="content-side">

           
            <nav class="container-fluid ">
            <img src="./images/logo1.png" alt="logo" class="logo">
            <h1 class="name">Employ me</h1>
            <ul>

            <li><a href="front_page.php">Home</a></li>

                <li style="width: 150px; margin-right:30px; "><a href="TableJob.php"> <button class="must"> Most Viewed  </button></a> </li>
                <li>
                    <a href="logout.php"> <button> Log out</button></a>
                </li>

            </ul>

        </nav>
        
            <div class="elements">

                <p>My Information</p>

                <form action="updateprofile.php?user_id=<?php echo $sendid ?>" method="get" style="height: 100%;">

                    <table class="table table-hover  table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70%; border-bottom: 1px solid #343a40;">My Information</th>
                                <th style="width: 30%;border-bottom: 1px solid #343a40;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="user_name" value="<?php echo $row2['user_name']?>" placeholder="Type info here"> </td>
                                <td class="right-side">
                                    Name
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="phone" value="<?php echo $row2['phone']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Phone number
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="email" value="<?php echo $row2['email']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Email
                                </td>

                            </tr>
                            

                            <tr>
                                <td><input type="text" name="address" value="<?php echo $row2['address']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Address
                                </td>

                            </tr>
                            
                            
                        </tbody>
                    </table>
                    
                </form>

            </div>
            <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Services</h3>
                                <ul>
                                    <li><a href="#">Web design</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Hosting</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>About</h3>
                                <ul>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Employe me</h3>
                                <p>This is a new website to discover jobs and announce jobs designed by Basil, Bakir and Mohammad. The purpose of this website is to help people find jobs suiting their field of study. </p>
                            </div>
                            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                        </div>
                        <p class="copyright">Company Name © 2021</p>
                    </div>
                </footer>
            </div>

        </div>
    </div>

    
                
                
                

                
            
</body>

</html>