<!doctype html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="cssAddJob/style.css">
    <title>Admin Panel</title>
</head>

<body>

<?php

if (isset($_GET['job_id'])){

require 'dbconnect.php';
$id = $_GET['job_id'];
    
    $query = "SELECT * FROM jobs WHERE job_id=$id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

}

else
{
    header("location:front_page.php");
}

?>


<div class="root">
        <div class="content-side">

            <!-- <div class="head1">

      </div> -->
            <div class="head2">
                <img src="./img/logo.png" alt="logo" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 15px;">
                <nav style="padding-top: 17px;">
                    <ul>
                        <li><a href="front_page.php">Home</a></li>
                       
                        <li><a href="#test">Profile</a></li>


                    </ul>
                </nav>

            </div>
            <div class="elements">

                <p>Add your job information below</p>

                <form action="updatejob.php?job_id=<?php echo $row['job_id']?>" method="post">

                    <table class="table table-hover  table-striped">
                        <thead>
                            <tr>
                                <th style="width: 70%; border-bottom: 1px solid #343a40;">Description</th>
                                <th style="width: 30%;border-bottom: 1px solid #343a40;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="job_title" value="<?php echo $row['job_title']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Job Title
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="company_name" value="<?php echo $row['company_name']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Company Name
                                </td>

                            </tr>
                            <tr>
                                <td><input type="text" name="shift_time" value="<?php echo $row['shift_time']?>"  placeholder="Type info here"></td>
                                <td class="right-side">
                                    Shift-Time
                                </td>

                            </tr>
                            <!-- <tr>
                                <td>
                                <select name="category_id" required>
                               
                            require 'dbconnect.php';
                                    
                            $query = "SELECT * FROM Category";
                            $result = mysqli_query($conn, $query);
                            $i = 1;
                            echo "<option value='CS' > CS </option>";
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

                            </tr> -->

                            <tr>
                                <td><input type="text" name="city" value="<?php echo $row['city']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    City
                                </td>

                            </tr>
                            <tr>
                                <td><input type="number" name="salary" value="<?php echo $row['salary']?>" placeholder="Type info here"></td>
                                <td class="right-side">
                                    Salary
                                </td>

                            </tr>
                            <tr>
                                <td><input required type="number" name="REVEIW" value="<?php echo $row['REVEIW']?>" class="form-control"  placeholder="Reviews"></td>
                                <td class="right-side">
                                    Reveiws
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