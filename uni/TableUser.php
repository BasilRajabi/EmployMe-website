<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Panel" />
    <meta name="keywords" content="JOBS">
    <meta name="author" content="Bakir">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bakir Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <style>
        body {
            background-color: #293241;
        }
        .table-cont {
            border: 2px solid black;
            border-collapse: collapse;
            min-width: 400px;
            font-size: 0.9em;
            margin: 25px 0;
            overflow: hidden;
            border-radius: 5px 5px 0 0;
        }

        .table-cont thead tr {
            background-color: #009879;
            color: #FFFFFF;
            font-weight: bold;
            text-align: left;
        }

        .table-cont th,
        .table-cont td {
            padding: 12px 15px;
        }

        .table-cont tbody tr {
            background-color: #dddddd;
            border-bottom: 2px solid #009879;
        }

        .set-center {
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            line-height: 50px;
        }

        nav ul li a {
            color: #293241;
            font-size: 20px;
            padding: 7px 13px;
            border-radius: 1px;
            font-weight: bold;
        }

        .bakir {
            background: #98C1D9;
            height: 75px;
            width: 100%;
            transition: 1.5;
            display: flex;
            justify-content: space-between;
        }

        nav ul {
            float: right;
            margin-top: 10px;
            margin-right: 25px;
        }

        .logo {
            color: lavender;
            font-size: 35px;
            line-height: 75px;
            padding: 0 50px;
            font-weight: bold;
        }

        a.active,
        a:hover {
            background: #EE6C4D;
            border-radius: 25px;
            transition: 1s;
        }

        .img {
            width: 75px;
            height: 75px;
            margin-left: 25px;
        }



        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: center;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
                margin-top: 20px;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            opacity: 0.9;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }
        .root {
            width: 100%;
            height: 100%;
        }
        .content {
            width: 100%;
            height: 628px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .header {
            margin-top: 50px;
            color: wheat;
        }
    </style>
</head>

<body>

    <div class="root">
        <div class="bakir">
            <img class="img" src="ppu_logo.png">
            <nav>

                <ul>
                    <li><a class="active" href="front_page.php">Home</a> </li>
                    <li><a href="logout.php">Log-Out</a> </li>
                </ul>
            </nav>

        </div>
        <div class="content">
            <div class="header">
                <h2>
                    Welcome to Admin Panel
                </h2>
                <p>Here is a list of all Users in this website</p>
            </div>

            <?php
            require 'dbconnect.php';
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn, $query);
            
            ?>
            <table class="table-cont">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th class="set-center">Email</th>
                        <th>Type</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['user_id'];
                        echo "<tr>";
                        echo "<td>" . $row["user_name"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["type"] . "</td>";
                        echo "<td><a href='deleteuser.php?user_id=$id'>Remove</a></td>";
                        echo "<td><a href='updateuserform.php?user_id=$id'>Update</a></td>";

                        echo "</tr>";
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
                            <h3>Phone Numbers</h3>
                            <ul>
                                <li><a href="#">0597197233</a></li>
                                <li><a href="#">0569008023</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>E-mails</h3>
                            <ul>
                                <li><a href="https://mail.google.com/" target="_blank">181054@ppu.edu.ps</a></li>
                                <li><a href="https://mail.google.com/" target="_blank">bakir.2000@hotmail.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>PPU JOBS</h3>
                            <p>You are in Admin Panel Section, so keep calm please!</p>
                        </div>

                    </div>
                    <p class="copyright">PPU JOBS ?? 2021 copyright</p>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>