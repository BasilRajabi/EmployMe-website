<!doctype html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="cssAddJob/job.css">
    <title>Announce for Job</title>
    <style>
         button {
            font-size: 30px;
            /* margin-left: 10px; */
    border-radius: 32px;
    /* width: 200px; */
    background-color: lightblue;
    color: white;
}
nav {
    background-color: #4c5c68;
    width: 100%;
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

}

else
{
    header("location:front_page.php");
}

?>


<div class="root">
        <div class="content-side">


      <nav class="container-fluid ">
            <img src="./images/logo1.png" alt="logo" class="logo">
            <h1 class="name">Employ me</h1>
            <ul>

            <li><a href="front_page.php">Home</a></li>
            <li><a href="profile.php?user_id=$id">Profile</a> </li>


                <li ><a href="TableJob.php"> <button class="must"> Most Viewed  </button></a> </li>
                <li>
                    <a href="logout.php"> <button> Log out</button></a>
                </li>

            </ul>

        </nav>
            <div class="elements">

                <p>Add your job information below</p>

                <form action="addjob.php" method="get">

                    <table class="table table-hover  table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70%; border-bottom: 1px solid #343a40;">Description</th>
                                <th style="width: 30%;border-bottom: 1px solid #343a40;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="job_title" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Job Title
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="company_name" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Company Name
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="shift_time" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Shift-Time
                                </td>

                            </tr>
                            <tr>
                                <td>
                                <select name="category_id" required>
                                 <?php
                            require 'dbconnect.php';
                                    
                            $query = "SELECT * FROM Category";
                            $result = mysqli_query($conn, $query);
                            $i = 1;
                            echo "<option >-Select- </option>";
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                                echo "<option value='$i'>" . $row["name"] . "</option>";
                                $i++;
                            } 
                                 ?>
                        
                            
                                  </select>                               
                                 </td>
                                <td class="right-side">
                                    Catogery
                                </td>

                            </tr>

                            <tr>
                                <td><input  type="text" name="user_id" value="<?php echo $id ?>" class="form-control" readonly></td>
                                <td class="right-side">
                                    ID OF User
                                </td>

                            </tr>
                            
                            <tr>
                                <td><input type="text" name="city" placeholder="Type info here"></td>
                                <td class="right-side">
                                    City
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="salary" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Salary
                                </td>

                            </tr>
                            <tr>
                                <td style="height: 50px;">
                                    <textarea name="description"  cols="20" rows="8" placeholder="type info here"></textarea>
                                </td>
                                <td class="right-side" style="height:50px">
                                    Job Description
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div style="background-color: red;">
                                    
                                    </div>
                                    <label>Yes</label>
                                    <input type="radio" name="featured" value="1">
                                    <label>No</label>
                                    <input type="radio" name="featured" value="0">
                                    <td class="right-side">Featured or not</td>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <input type="submit"  class="bt">
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