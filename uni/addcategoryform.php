<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="cssAddCate/cate.css">
    <title>Announce for Job</title>
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
                         <h2>Add New Category</h2>

                            <form action="addcategory.php" method="get">

                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input required type="text" name="name" class="form-control" placeholder="Enter Category name">

                                <button type="submit" class="btn btn-primary">Submit</button>
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