<?php include_once('../includes/header2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="../includes/jquery31.js"></script>
	<script src="main.js"></script>
	<title>Admin Login</title>
</head>
<body>
	<form action="include/login.inc.php" method="POST">
		<div class="design"></div>
		<img id="jump" src="../images/admins.png" width="520px">
		<img id="error" src="../images/404p.png" width="570px">
		<div id="center">
			<h3>Welcome, Please Login to Continue...</h3>
			<p>Username</p>
			<input type="text" name="username">
			<p>Password</p>
			<input type="password" name="password">
			<p></p>
			<button type="submit" name="login">Login</button>
		</div>
		<div class="errormsg">
			<h1>Page not accessible, Please contact <br> Placement Officer</h1>
			<p><a href="#" class="btn" id="back">Get Back</a></p>
		</div>
	</form>
</body>
</html>


