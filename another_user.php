<?php

session_start();
if(!isset($_SESSION['myusername']) ){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creating another user</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 
 <!--It is only for form input of new user-->

<center>
<form action="add_user.php" method="post">
<br><br><br>
Username: <input type="text" name="admin_name"><br><br>
Password: <input type="text" name="admin_pass"><br><br>
<input type="submit" value="Create">
</center>
<!--Developed by: Md Abu Hanife Nayem & Masiur rahman siddiki-->
</form>
</body>
</html>