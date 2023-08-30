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
	<title>Add Admin</title>
</head>
<body>
	<form name="myForm" action="adminregconn.php" onsubmit="f()">
		
            <div class="design"></div>
            <img id="jump" src="../images/admins.png" width="520px">
            <div class="content">
            <div id="center" class="cen">
                <h3>Please Sign Up to create a account...</h3>
                <div class="input1">
                    <p>First Name</p>
                    <input type="text" name="fname">
                </div>
                <div class="input2">
                    <p>Last Name</p>
                    <input type="text" name="lname">
                </div>
                <div class="input7">
                    <p>Username</p>
                    <input type="text" name="username">
                </div>
                <div class="input4">
                    <p>Phone Number</p>
                    <input type="text" name="phone">
                </div>
                <div class="input3">
                    <p>Mail-ID</p>
                    <input type="email" name="email">
                </div>
                <div class="input5">
                    <p>Password</p>
                    <input type="password" name="password1">
                </div>
                <div class="input6">
                    <p>Confirm Password</p>
                    <input type="password" name="password2">
                </div>
                <p></p>
                <button type="submit" name="register">Register</button>
            </div>
        </div>
	</form>
</body>
</html>


