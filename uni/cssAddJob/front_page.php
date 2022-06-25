<html>

<head>
    <title>Employ me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./front/home.css">
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
          </style>
</head>


<body>
    <div class="root">

        <nav class="container-fluid ">
            <img src="./images/logo1.png" alt="logo" class="logo">
            <h1 class="name">Employ me</h1>
            <ul>

                <!-- <?php
                        //$test = $_COOKIE['user_name'];

                        //  $sql= "SELECT  * FROM users where user_id = 4";

                        //  $result = mysqli_query($conn, $sql);
                        //  while($row = mysqli_fetch_assoc($result)) 
                        //         {
                        //           $sendid = $row['user_id'];
                        //     }
                        //     echo '<li><a href="profile.php?user_id=$id">Profile</a> </li>';

                        ?> -->


                <!-- <li><a href="profile.php?user_id=$id">Profile</a> </li> -->
                <li style="width: 150px;"><a href="TableJob.php"> <button class="must"> Must Viewed  </button></a> </li>
                <li>
                    <a href="logout.php"> <button> Log out</button></a>
                </li>

            </ul>

        </nav>



        <?php

        require 'dbconnect.php';
        $account;

        if (isset($_COOKIE['user_name'])) {
            echo "<p class='welcome'> Welcome " . $_COOKIE['user_name'] . "</p> <br>";

            $account = $_COOKIE['user_name'];

            $sql = "SELECT type, user_id FROM users where user_name = '$account'";

            $result = mysqli_query($conn, $sql);
            $input;
            $sendid;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($account === "admin") {
                    echo "<h2>Your Account Type: Admin</h2>". "<br>";
                } else {
                    echo "Your Account Type: " . $row['type'] . "<br>";
                }
                // echo "Your Account Type: " . $row['type'] . "<br>";

                $input = $row['type'];
                $sendid = $row['user_id'];
            }
            // echo '<a href="profile.php?user_id=$sendid">Profile</a>';

            if ($input === "Business" || $input === "Admin") {
                echo " <a href='addjobform.php?user_id=$sendid'> <button class='spann'> Add Job </button> </a> ";
                echo " <a href='myannouncements.php?user_id=$sendid'> <button class='spann'> My Announcments </button> </a>  ";
            }
            if ($account === "admin") {
                echo "<a href='addcategoryform.php'> <button class='spann'>Add new Category </button></a>  ";
                echo "<a href='TableUser.php?user_id=$sendid'> <button class='spann'>Show Users Table </button></a>  <br><br>";
            }
            

            echo '  <form action="searchresult.php" method="post">';

            echo '  <select name="chosen" id="" class="sel">';
            echo '  <option value=""> -select-</option>';

            echo '   <option value="category"> Category</option>';
            echo '  <option value="job_title"> Job title</option>';
            echo '  <option value="city"> City</option>';

            echo '     </select>';
            echo '     <input type="text" class="searchbar" name="searchtext">';
            echo '      <button type="submit" class ="btn">Search</button>';
            echo '</form>';
        } else {
            header("location:login.php");
        }

        $query = "SELECT * FROM jobs";
        $query2 = "SELECT * FROM Jobs where featured";
        $query3 = "SELECT j.*, u.*, c.name FROM jobs j, users u, category c WHERE j.user_id = u.user_id and j.category_id = c.category_id and not featured";
        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $query2);
        $result3 = mysqli_query($conn, $query3);

        if (mysqli_error($conn)) {
            echo mysqli_error($conn);
        } else {
            echo "</br>";
        }


        echo  "<p class='bbb'> Number of jobs available: " . mysqli_num_rows($result) . " </p>";

        ?>




        <div class="feature">
            <h3>Featured jobs offering</h3>

        </div>


        <div class="feat" style="margin-bottom: 100px;">


            <div class=" grid-container ">


                <?php

                while ($row = mysqli_fetch_assoc($result2)) {
                    $id = $row['job_id'];
                    $userid = $row['user_id'];
                    $categoryid = $row['category_id'];
                    $REVEIW = $row['REVEIW'];

                    echo ' <div class="card ">';
                    echo ' <img src="./images/odai.jpg" alt="logo">';
                    echo ' <p> Job Title: ' . $row["job_title"] . '</p>';
                    echo ' <p> Company Name: ' . $row["company_name"] . '</p>';
                    echo "<td><a href='JobDetails.php?job_id=$id&user_id=$userid&category_id=$categoryid&REVEIW=$REVEIW'>More info</a></td>";
                    if ($account === 'admin') {
                        echo "<td><a href='deletejob.php?job_id=$id'>Delete</a></td>";
                        echo "<td><a href='updatejobform.php?job_id=$id&user_id=$userid&category_id=$categoryid'>Update</a></td>";
                    }
                    echo ' </div>';
                }





                ?>



            </div>



        </div>

        <div class=" grid-container " style="margin-bottom: 150px;">



            <?php


            while ($row = mysqli_fetch_assoc($result3)) {
                $id = $row['job_id'];
                $userid = $row['user_id'];
                $categoryid = $row['category_id'];
                $REVEIW = $row['REVEIW'];

                echo ' <div class="card  cardd">';
                echo ' <img src="./images/odai.jpg" alt="logo">';
                echo ' <p> Job Title: ' . $row["job_title"] . '</p>';
                echo ' <p> Company Name: ' . $row["company_name"] . '</p>';
                echo " <a href='JobDetails.php?job_id=$id&user_id=$userid&category_id=$categoryid&REVEIW=$REVEIW'>More info</a> ";
                echo ' </div>';
            }

            ?>




        </div>


        <div class="footer container-fluid">


            <footer class="container">
                <h4>Contact us</h4>
                <p>
                    <a href="https://mail.google.com/">181086@ppu.edu.ps</a> <br> Mobile: 0568112982 | 0595112982
                </p>

            </footer>
        </div>
    </div>
</body>

</html>