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
  <style>
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


  <div class="root">
    <div class="content-side">

     
    <nav class="container-fluid ">
            <img src="./images/logo1.png" alt="logo" class="logo">
            <h1 class="name">Employ me</h1>
            <ul>

            <li><a href="front_page.php">Home</a></li>
            <li><a href="profile.php?user_id=$id">Profile</a> </li>


                <li style="width: 150px; margin-right:30px; "><a href="TableJob.php"> <button class="must"> Most Viewed  </button></a> </li>
                <li>
                    <a href="logout.php"> <button> Log out</button></a>
                </li>

            </ul>

        </nav>

      <div class="elements">

        <p>Your job announcements</p>


        <?php

if (isset($_GET['user_id'])){

    require 'dbconnect.php';
    $id = $_GET['user_id'];
    $query = "SELECT * FROM jobs WHERE user_id=$id";

    $result = mysqli_query($conn, $query);
    
    if ( mysqli_num_rows($result) > 0)
    {
        echo ' <table class="table table-hover  table-striped">';
        echo "<thead>";
            echo "<tr>";
            echo "<th> Job ID </th>";
            echo "<th> Job Title </th>";
            echo "<th> Company Name </th>";
            echo "<th> Shift-Time </th>";
            echo "<th> Category </th>";
            echo "<th> City </th>";
            echo "<th> description </th>";
            echo "<th> Salary </th>";
            echo "<th> Featured </th>";
            echo "<th> Publisher </th>";
            echo "</tr>";

        while($row = mysqli_fetch_assoc($result)){
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

            echo "</tr>";
        }

        echo "</table> <br> <br>";    
        
        // stop here 
    }
    else
    {
        echo "You still don't add Jobs offer!";
    }
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


