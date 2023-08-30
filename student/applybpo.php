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
    <img src="../images/apply.png" id="img1" style="position: fixed;">
      <?php include_once 'includes/nav.php' ?>
      <br><br> <br> <br><br>
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
    	<h2 style="margin-left: 100px;">Apply For a BPO Company</h2>
    </div>
    <br> <br> <br> <br> <br>
         <form action="check.inc.php" method="POST">
            
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Select a Company</label>
              <select class="custom-select" name="company">
              <?php 
                $user = $_SESSION['username'];
                $sql = "select * from company where type='BPO' and status='Active';";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                  ?>
                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                  <?php
              }
              }
              ?>
              </select>
            </div>
            <div class="form-group col-md-3">
            <input class="btn" type="submit" name="check" value="Check Eligibility" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);"> 
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