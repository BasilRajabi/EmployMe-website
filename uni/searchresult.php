<?php
require 'dbconnect.php';
if(count($_POST)>0)
 {
    $searchtext = $_POST['searchtext'];
    $criteria = $_POST['chosen'];


    if ($criteria == "job_title" )
    {
        $query = "select * from jobs where job_title = '$searchtext'  ";
    $result = mysqli_query($conn , $query);
    }

    else if ($criteria == "city" )
    {
        $query2 = "select * from jobs where city = '$searchtext'  ";
    $result2 = mysqli_query($conn , $query2);
    }

    else if ($criteria == "category")
    {
        $query3 = "SELECT * FROM jobs where category_id = ( select category_id from category where name like '$searchtext')   ";
        $result3 = mysqli_query($conn , $query3);
    }

    



 }


?>

<html>
    <head>
        <title> Employ me</title>
        <style>
            table, th, td
             {
                border: 1px solid black;
             }
        </style>
        <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./cssmyannouncements/style.css">
<style>
    .head2 {
            width: 100%;
            height: 14%;
            background-color: #4c5c68;
            display: flex;
             justify-content: space-between;

}
            nav ul {
                
                margin-top: 15px;}


                li {
                    display: inline-block;
                    font-family: Stylus BT;

                    

                    text-decoration: none;
                    font-size: 35px;
                    margin-right: 20px;
                    align-self: center;
}

li :hover{
    color: #a8c1e1;
}
.ahead {
 color: #f8f9fa;
  }

  .pp {
      color: #4c5c68;
      font-size: 35px;
      margin-left: 40%;
      margin-top: 4%;
  }
  .footer {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #4c5c68;
        color: #a8c1e1;
        text-align: start;
    }

                
            
        
</style>

    </head>
<body > 
<div class="head2">
            <img src="./images/logo1.png" alt="logo" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 15px;">
             <nav style="padding-top: 17px;">
             <ul >
                 <li><a href="front_page.php" class="ahead">Home</a></li>
                 <li><a href="profile.php?user_id=$id" class="ahead">Profile</a></li>
            
              </ul>
             </nav>

        </div>
    <div class="container">
    <p class="pp">Search result</p>


    

<table class="table table-hover  table-striped">
        <tr>
            <?php 
            
             echo '   <td>Job title</td>';
             echo '    <td>Company name</td>';
              echo '      <td>Category</td>';
              echo '   <td>City</td>';
              echo '   <td></td>';

            ?>
            

        </tr>
<?php
if($criteria == "job_title")
{

    $i=0;
    while($row = mysqli_fetch_array($result))
     {
         $queryC = "SELECT name FROM category
         where category_id = ( select DISTINCT category_id from jobs where job_title like '$searchtext')";
         $resultC = mysqli_query($conn , $queryC);
         $rowC = mysqli_fetch_array($resultC);


         echo " <tr>";
         echo "  <td>   $row[job_title] </td>";
         echo "   <td>  $row[company_name] </td>";
         echo "  <td>  $rowC[name] </td>";
         echo "  <td>   $row[city] </td>";
         echo " <td> <a href='JobDetails.php?job_id=$row[job_id]&user_id=$row[user_id]&category_id=$row[category_id]' class='aaa'>More details</a> </td>";

         echo "  </tr>";
        $i++;
     }
}
else if ($criteria == "category")
{
    $i=0;
    while($row = mysqli_fetch_array($result3))
     {
        // $queryC = "SELECT name FROM category
        // where category_id = ( select DISTINCT category_id from jobs where job_title like '$searchtext')";
        // $resultC = mysqli_query($conn , $queryC);
        // $rowC = mysqli_fetch_array($resultC);
    
         echo " <tr>";
         echo "  <td>   $row[job_title] </td>";
         echo "   <td>  $row[company_name] </td>";
         echo "  <td>  $searchtext </td>";
         echo "  <td>   $row[city] </td>";
         echo " <td> <a href='JobDetails.php?job_id=$row[job_id]&user_id=$row[user_id]&category_id=$row[category_id]' class='aaa'>More details</a> </td>";

         echo "  </tr>";
        $i++;
     }
}

else if ($criteria == "city")
{
    $i=0;
    while($row = mysqli_fetch_array($result2))
     {
         $cid = $row['category_id'];

        $queryQ = " SELECT name FROM category where category_id = ( select DISTINCT category_id from jobs where category_id = '$cid' ) ";
        $resultQ = mysqli_query($conn , $queryQ);
        $rowQ = mysqli_fetch_array($resultQ);


    
         echo " <tr>";
         echo "  <td>   $row[job_title] </td>";
         echo "   <td>  $row[company_name] </td>";
         echo "  <td>  $rowQ[name] </td>";
         echo "  <td>   $row[city] </td>";
         echo " <td> <a href='JobDetails.php?job_id=$row[job_id]&user_id=$row[user_id]&category_id=$row[category_id]' class='aaa'>More details</a> </td>";

         echo "  </tr>";
        $i++;
     }
}
?>
    </table>
    </div>
    <div class="footer container-fluid" >


             <footer class="container">
                <h4>Contact us</h4>
                <p>
                    <a href="https://mail.google.com/">181086@ppu.edu.ps</a> <br> Mobile: 0568112982 | 0595112982
                </p>

             </footer>
        </div>
</body>
</html>