<?php

if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];
    require 'dbconnect.php';
    $query = "SELECT * FROM users WHERE user_id=$id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <h2>User Form</h2>
        <div class="row">
            <div class="col-md-6">
                
                <form action="updateuser.php?user_id=<?php echo $row['user_id']?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input required type="text" name="user_name" value="<?php echo $row['user_name']?>" class="form-control"  aria-describedby="emailHelp" placeholder="Enter User name">
                      </div>
                      
                      <div class="form-group">
                        <label>Phone</label>
                        <input required type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control"  placeholder="phone">

                      </div>
                      <div class="form-group">
                        <label>Address</label>
                        <input required type="text" name="address" value="<?php echo $row['address']?>" class="form-control"  placeholder="Address">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input required type="text" name="email" value="<?php echo $row['email']?>" class="form-control"  placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label>Type</label>
                        <input required type="text" name="type" value="<?php echo $row['type']?>" class="form-control"  placeholder="type">
                      </div>
                      
                     
                      <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>

            </div>
            <div class="col-md-6"></div>
        </div>
        
    </div> 
    </body>
</html>

<?php

}
else{
    header("location:TableUser.php");
}

?>