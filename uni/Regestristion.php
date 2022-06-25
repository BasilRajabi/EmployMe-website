<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="main.css/register.css">    
    </head>
    <body>
    <form class="box" action="AddUsers.php" method="get">
        <h1>Registration</h1>
        <input type="text" name="user_name" placeholder="Username">
        <input type="password" name="passwords" placeholder="Password">
        <input type="text" name="phone" placeholder="Phone number">
        <input type="text" name="address" placeholder="Address">
        <input type="text" name="email" placeholder="Email">
        <div style=" color: white;">


            <label>Account Type</label> <br> <br>
            <input type="radio" name="type" value="Business">
            <label>Business Owner</label>

            <br>
            <input type="radio" name="type" value="Normal">

            <label>Normal</label>
        </div>
        <input type="submit" name="" value="Sign Up">
    </form>

    

            
    </body>
</html>