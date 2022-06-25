<html>
<!doctype html>
<head>
    <title>Employ me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="frontpage.css">
    <style>

      


        body {
            background-color: #DEE1DD;
        }



        .aaa {
            color: #4c5c68;
            text-align: center;
            text-decoration: none;
            background-color: gold;
            border: 1px solid #4c5c68;
            border-radius: 20px;
            font-size: 20px;
            width: 35%;
            margin-left: 55%;
            margin-bottom: 10px;

        }

        .aaa:hover {
            text-decoration: none;
        }

        .welcome {
            font-size: 30px;
            color: #4c5c68;
            margin-left: 3%;
        }

        .spann {
            margin-left: 3%;
            width: 15%;
            background-color: #4c5c68;
            border-radius: 20px;
            color: #a8c1e1;
            font-size: 25px;

        }

        .bbb {
            font-size: 25px;
            color: #4c5c68;
            margin-left: 3%;

        }
        

        .cardd {
            width: 60%;
            margin-left: 20%;
            background-color: #a8c1e1;

        }

        .cardd p {
            padding-left: 10px;
            font-size: 20px;
        }

        .btn {
            background-color: #4c5c68;
            color: #DEE1DD;
            border-radius: 20px;
            width: 100px;
            height: 40px;
            margin-left: 20px;
        }

        .sel {
            height: 40px;
            width: 120px;
            margin-left: 25%;
            margin-top: 30px;
            border-radius: 10px;
            margin-right: 20px;
            text-align: center;
        }

        .searchbar {
            height: 40px;
            width: 25%;
            border-radius: 10px;
            padding-left: 20px;


        }
        
        .must {
            width: 200px;
             margin-right: 300px ; 
        }
        .feature {
            background-color: gold;
    margin-top: 3%;
    margin-left: 40%;
    margin-bottom: 1%;
    height: 60px;
    width: 290px;
    border-radius: 25px;
        }
        .header {
            color: #4c5c68;
            font-size: 40px;
            margin-left: 30%;
            margin-top: 2%;
            margin-bottom: 2%;
        }
          </style>
</head>


<body>
    <div class="root">

        <nav class="container-fluid ">
            <img src="./images/logo1.png" alt="logo" class="logo">
            <h1 class="name">Employ me</h1>
            <ul>

               
                <li><a href="front_page.php">Home</a></li>

                <li><a href="profile.php?user_id=$id">Profile</a> </li>
                <li>
                    <a href="logout.php"> <button> Log out</button></a>
                </li>

            </ul>

        </nav>



        <div class="container">
            <div class="header">
                <p>
                    Most Viewed Jobs
                </p>
            </div>

            <?php
            require 'dbconnect.php';
            $query = "select j.*, c.name, u.user_name from jobs j, category c, users u where j.category_id = c.category_id and j.user_id = u.user_id order by REVEIW DESC";
            $result = mysqli_query($conn, $query);
            
            ?>
            <table class="table table-hover  table-striped">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Job Title</th>
                        <th>Company Name</th>
                        <th>Shift Time</th>
                        <th>City</th>
                        <th>Category</th>
                        <th>Publisher</th>
                        <th>Salary</th>
                        <th class="set-center">Description</th>
                        <th></th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $row["job_title"] . "</td>";
                        echo "<td>" . $row["company_name"] . "</td>";
                        echo "<td>" . $row["shift_time"] . "</td>";
                        echo "<td>" . $row["city"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["user_name"] . "</td>";
                        echo "<td>" . $row["salary"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";



                        echo "</tr>";
                        $i++;
                    }
                    
                    ?>
                </tbody>

            </table>
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