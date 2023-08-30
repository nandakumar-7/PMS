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
    <form action="php/viewcomp.inc.php" method="POST">
    <div class="content" style="margin-top: 40px; margin-left: -60px;">
    	<div class="form-row">
    		<div class="form-text"><h1>Companies Details</h1></div>
    	</div>
    	 <br>
    	<?php 
            if (isset($_GET['id'])) {
            $user = $_SESSION['username'];
                $user = $_SESSION['username'];
                $id =  $_GET['id'];
    		$sql = "select * from applied where id='$id';";
    		$res = mysqli_query($conn, $sql);
    		if (mysqli_num_rows($res) > 0) {
    		while ($row = mysqli_fetch_assoc($res)) {
          ?>
            <div class="center">
            <div class="form-group col-sm-6">
                <label>ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>" readonly>
                </div>
            <div class="form-group col-sm-6">
                <label>Student Name</label>
                <input type="text" class="form-control" id="itemname" name="name" value="<?php echo $row['name']; ?>" readonly>
                </div>
            <div class="form-group col-sm-6">
                <label>Company Name</label>
                <input type="text" class="form-control" id="price" name="company" value="<?php echo $row['company']; ?>" readonly>
                </div>
            <div class="form-group col-sm-6">
                <label>Status</label>
                <select class="custom-select" name="status">
                    <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                    <option value="Unknown">Unknown</option>
                    <option value="Attended">Attended</option>
                    <option value="Selected">Selected</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>
            <div class="form-group col-sm-11">
                <button type="submit" class="btn" name="update" style="width: 100px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);">Update</button>
            </div>
            <p class="lead"><b>Note: </b>Update only if you received any mail/message from the company</p>
          <?php
    	}
    	}
    }
    	?> 
    </div>
    </form>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#apply").addClass("active");
        
      });
    </script>
</body>
</html>