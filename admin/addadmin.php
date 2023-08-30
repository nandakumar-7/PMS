<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>

    <img src="../images/regbg.png" id="img1" style="position: fixed;">
    <img src="../images/admins.png" width="600px" style="position: absolute; z-index: 1; margin-left: 52%; margin-top: 4%;">
    	<?php include_once 'includes/nav1.php' ?>
    <div class="content" style="margin-top: 40px; margin-left: -0px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 60px;">Add Admin</h1> <br>
    	<div style="position: absolute; z-index: 1;">
    	
    	</div>
    	<form action="php/addadmin.inc.php" method="POST">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        <div class="form-row">
		        	<div class="form-group col-md-6">
			          <label for="cid">Admin ID</label>
			          <input type="text" class="form-control" id="cid" name="cid" placeholder="Student ID" disabled>
			        </div>
			        <div class="form-group col-md-6">
			          <label for="cname">Username</label>
			          <input type="text" class="form-control" id="cname" name="username" placeholder="Username" required>
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-6">
			          <label for="cid">First Name</label>
			          <input type="text" class="form-control" id="cid" name="fname" placeholder="First Name" required>
			        </div>
			        <div class="form-group col-md-6">
			          <label for="cname">Last Name</label>
			          <input type="text" class="form-control" id="cname" name="lname" placeholder="Last Name" required>
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-6">
			          <label for="cid">Mail-ID</label>
			          <input type="email" class="form-control" id="cid" name="mailid" placeholder="Mail-ID" required>
			        </div>
			        <div class="form-group col-md-6">
			          <label for="cname">Phone</label>
			          <input type="tel" pattern="^\d{10}$" class="form-control" id="cname" name="phone" placeholder="Phone" required>
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-6">
			          <label for="cid">Password</label>
			          <input type="password" class="form-control" id="cid" name="pwd1" placeholder="Password" required>
			        </div>
			        <div class="form-group col-md-6">
			          <label for="cname">Confirm Password</label>
			          <input type="password" class="form-control" id="cname" name="pwd2" placeholder="Confirm Password" required>
			        </div>
		        </div>
		        <div class="form-row justify-content-center">
		        	<button type="submit" class="btn col-md-5" name="signup" style="margin-left: -0px; color: white;
									font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">SignUp</button>
		        </div>
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>