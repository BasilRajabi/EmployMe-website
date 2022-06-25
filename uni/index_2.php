<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<?php
	$servername = "localhost";
	$username = "uni_uswer";
	$password = "bakir123456";

	$conn = mysqli_connect($servername, $username, $password);
	if ($conn) {
		echo "successful";
	} else {
		echo "not success";
	}

	$sql = "CREATE DATABASE wed";
	if ($conn->query($sql) === true) {
		echo "created db";
	} else {
		echo "failed to create";
	}






	?>
	<form method="POST" action="target.php">
		First-Name: <input type="text" name="firstname">
		Last-Name: <input type="text" name="lastname">

		<input type="submit">


	</form>


</body>

</html>