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

    <img src="images/regbg.png" id="img1" style="position: fixed;">
    <img src="images/ppl.png" width="660px" style="position: absolute; z-index: 1; margin-left: 50%; margin-top: 10%;">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 20px; margin-left: -40px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 60px;">Student SignUp</h1> <br>
    	<div style="position: absolute; z-index: 1;">
    		<?php 
			include_once 'includes/db.inc.php';
			if (isset($_POST['signup'])) {
				$uname = $_POST['username'];
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['mailid'];
				$phone = $_POST['phone'];
				$pwd1 = $_POST['pwd1'];
				$pwd2 = $_POST['pwd2'];
				$secque = $_POST['secque'];
				$secans = $_POST['secans'];
				echo $uname;
				if ($pwd1 == $pwd2) {
					$sql = "insert into studentlogin(uname, pwd, fname, lname, email, phone, secque, secans) values('$uname', '$pwd1', '$fname', '$lname', '$email', '$phone', '$secque', '$secans');";
					mysqli_query($conn, $sql);
				}
			}
		?>
    	</div>
    	<form action="register.php" method="POST">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
		        <div class="form-row">
		        	<div class="form-group col-md-5">
			          <label for="cid">Student ID</label>
			          <input type="text" class="form-control" id="cid" name="cid" placeholder="Student ID" disabled>
			        </div>
			        <div class="form-group col-md-5">
			          <label for="cname">Username</label>
			          <input type="text" class="form-control" id="cname" name="username" placeholder="Username">
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-5">
			          <label for="cid">First Name</label>
			          <input type="text" class="form-control" id="cid" name="fname" placeholder="First Name">
			        </div>
			        <div class="form-group col-md-5">
			          <label for="cname">Last Name</label>
			          <input type="text" class="form-control" id="cname" name="lname" placeholder="Last Name">
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-5">
			          <label for="cid">Mail-ID</label>
			          <input type="text" class="form-control" id="cid" name="mailid" placeholder="Mail-ID">
			        </div>
			        <div class="form-group col-md-5">
			          <label for="cname">Phone</label>
			          <input type="text" class="form-control" id="cname" name="phone" placeholder="Phone">
			        </div>
		        </div>
		        <div class="form-row">
		        	<div class="form-group col-md-5">
			          <label for="cid">Password</label>
			          <input type="password" class="form-control" id="cid" name="pwd1" placeholder="Password">
			        </div>
			        <div class="form-group col-md-5">
			          <label for="cname">Confirm Password</label>
			          <input type="password" class="form-control" id="cname" name="pwd2" placeholder="Confirm Password">
			        </div>
		        </div>
		        <div class="form-row">
			        <div class="form-group col-md-5">
			          <label for="exampleInputEmail1">Security Question</label>
			          <select class="form-control" name="secque">
			          	<option>Which is Favourite Food?</option>
			          	<option>Which is your First Phone?</option>
			          	<option>Which is your Favourite Mobile Company?</option>
			          </select>
			        </div>
		        	<div class="form-group col-md-5">
			          <label for="telephone">Answer</label>
			          <input type="text" class="form-control" id="telephone" name="secans" placeholder="Answer">
			        </div>
		        </div>
		        <div class="form-row justify-content-center">
		        	<button type="submit" class="btn btn-dark col-md-5" name="signup" style="margin-left: -120px;">SignUp</button>
		        </div>
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>