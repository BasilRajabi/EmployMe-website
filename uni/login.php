<html>
<head>
<meta charset="utf-8">
    <title>َLogin</title>
    <link rel="stylesheet" href="main.css/login.css">
</head>
<body>

        
                
        <form class="box" action="check.php" method="post">

         <h1>Log In</h1>
        <input type="text" name="user_name" placeholder="Enter username">
        <input type="password" name="passwords" placeholder="Password">
        <input type="submit" name="" value="Sign In">
        

        <p>Don't have an account? <a href="regestristion.php" target="_blank"> Sign up</a></p>

        <br>


                    
                    <?php
                        if (isset($_GET['error'])){
                            ?>
                            <div class="alert alert-danger" role="alert">
                            <p style="color: red;"> Invalid Username or Password! </p>
                            </div>
                          <?php
                        }
                    ?>
                </div>
        </div>
        
    </div> 
    
</body>
</html>