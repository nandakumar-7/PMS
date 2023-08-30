<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <?php include_once 'include/head.php' ?>
</head>
<body>
	<img src="../images/regbg.png" id="img1" style="position: fixed;">
    <img src="../images/ppl.png" width="660px" style="position: absolute; z-index: 1; margin-left: 50%; margin-top: 10%;">
    	<?php include_once 'include/nav.php' ?>
    <div class="content" style="margin-top: 140px; margin-left: -10px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 70px;">Sign in to your Account</h1> <br>
    	<form action="php/register.inc.php" method="POST">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        <div class="form-row">
			        <div class="form-group">
			          <label for="cname">Username</label>
			          <input type="text" class="form-control" id="cname" name="username" placeholder="Username" style="width: 240px;">
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group">
			          <label for="cid">Password</label>
			          <input type="password" class="form-control" id="cid" name="pwd1" placeholder="Password" style="width: 240px;">
			        </div>
		        </div>
		        	<div class="form-row">
		        		<div class="form-group">
		        			<button type="submit" class="btn btn-dark" name="signup">LOGIN</button>
		        		</div>
		        		<div class="form-group">
		        			<a href="#" class="btn" style="margin-left: 30px;">Forgot Password?</a>
		        		</div>
		        	</div>
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'include/footer.php' ?>
</body>
</html>