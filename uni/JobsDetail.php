<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./cssmyannouncements/style.css">
  <title>My announcements</title>
</head>

<body>


  <div class="root">
    <div class="content-side">

     
        <div class="head2">
            <img src="./images/logo1.png" alt="logo" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 15px;">
             <nav style="padding-top: 17px;">
             <ul >
                 <li><a href="front_page.php">Home</a></li>
                 <li><a href="profile.php?user_id=$id">Profile</a></li>
            
              </ul>
             </nav>

        </div>

      <div class="elements">

        <p>Your job announcements</p>


        <?php

if (isset($_GET['job_id']) && isset($_GET['user_id']) && isset($_GET['category_id']) && isset($_GET['REVEIW'])){

    require 'dbconnect.php';
    $id = $_GET['job_id'];
    $userid = $_GET['user_id'];
    $categoryid = $_GET['category_id'];
    $REVEIW = $_GET['REVEIW'];
    
    $query = "SELECT * FROM Jobs WHERE job_id=$id";
    $query2 = "SELECT user_name from users where user_id = $userid";
    $query3 = "SELECT name from Category where category_id = $categoryid";
    $query4 = "UPDATE JOBS SET REVEIW= $REVEIW + 1  WHERE job_id=$id";

    $result4 = mysqli_query($conn, $query4);
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);

    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $row3 = mysqli_fetch_array($result3);
    $result = mysqli_query($conn, $query);
    
    //if ( mysqli_num_rows($result) > 0)
    //{
        echo ' <table class="table table-hover  table-striped">';
        echo "<thead>";
            echo "<tr>";
            echo "<th> Job Title </th>";
            echo "<th> Company Name </th>";
            echo "<th> Shift-Time </th>";
            echo "<th> Category </th>";
            echo "<th> City </th>";
            echo "<th> description </th>";
            echo "<th> Salary </th>";
            echo "<th> Publisher </th>";
            echo "<th> Reviews </th>";
            echo "</tr>";
            echo "</tbody>";
            echo "<tr>";
            echo "<td>" . $row["job_title"] . "</td>";
            echo "<td>" . $row["company_name"] . "</td>";
            echo "<td>" . $row["shift_time"] . "</td>";
            echo "<td>" . $row3["name"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            echo "<td>" . $row2['user_name'] . "</td>";
            echo "<td>" . $row['REVEIW'] . "</td>";
            echo "</tr>";
            echo "</tbody>";

    /*    while($row = mysqli_fetch_assoc($result)){
            $id = $row['job_id'];
            $userid = $row['user_id'];
            $categoryid = $row['category_id'];

            $query2 = "SELECT * FROM category WHERE category_id = $categoryid";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_array($result2);

            $query3 = "SELECT user_name FROM users WHERE user_id = $userid";
            $result3 = mysqli_query($conn, $query3);
            $row3 = mysqli_fetch_array($result3);

            echo "</thead>";
            echo "<tr>";
            echo "<td>" . $row["job_id"] . "</td>";
            echo "<td>" . $row["job_title"] . "</td>";
            echo "<td>" . $row["company_name"] . "</td>";
            echo "<td>" . $row["shift_time"] . "</td>";
            echo "<td>" . $row2["name"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            if ($row["featured"])
            {
                echo "<td>" . "Yes" . "</td>";
            }
            else
            {
                echo "<td>" . "No" . "</td>";
            }
            echo "<td>" . $row3["user_name"] . "</td>";

            echo "</tr>";*/
        //}

        echo "</table> <br> <br>";    
        
        // stop here 
    //}
   // else
    //{
        //echo "You still don't add Jobs offer!";
    //}
}
else{
    header("location:index.php");
}



?>

      

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



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>


