<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
    	<img id="img2" src="../images/applyicon.png" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%; margin-top: 10vh;">
    </div>
    <img src="../images/apply.png" id="img1">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 40px; margin-left: -30px;">
    	<div class="form-row">
    		<div class="form-text"><h1 style="margin-left: 100px;">Companies Applied</h1></div>
    		&nbsp;<div class="form-text"><a href="category.php" class="btn btn-sm btn-danger">Apply Now</a></div>
    	</div>
    	 <br>
    	<?php 
    		$user = $_SESSION['username'];
    		$sql = "SELECT * FROM `applied` where name='$user' and status!='Selected' and status!='Rejected' and 
          company in (select name from company);";
    		$res = mysqli_query($conn, $sql);
    		if (mysqli_num_rows($res) > 0) {
    		while ($row = mysqli_fetch_assoc($res)) {
          ?>
          <form>
          <ul style="list-style: square;">
            <li class="lead"><a href="viewcompanies.php?id=<?php echo $row['id']; ?>" class="text-dark"><?php echo $row['company']; ?></a></li>
          </ul>
          </form>
          <?php
    	}
    	} else {
        ?>
          <form>
            <p class="lead">You haven't applied for any companies!</p>
          </form>
        <?php
      }
    	?> 
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#apply").addClass("active");
        
      });
    </script>
</body>
</html>