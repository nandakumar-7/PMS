<!doctype html>
<html lang="en">
  <head>
    

    <?php include_once 'includes/head.php'; ?>
    <?php include_once 'includes/footer.php'; ?> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Change Password</title>
  </head>
  <body>
    <div>
      <img id="img2" src="images/pass.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%;
       margin-top: 20vh;">
    </div>
    <img src="images/aboutbg.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php'; ?>
    <div class="content">
        <br> <br> 
    <h1 align="center" style="margin-left: 50px;">Forgot Password?</h1> <br>
    <br><br>
    <div class="row justify-content-center">
    <form action="php/forgot1.inc.php" autocomplete="off" method="POST">
			<input type="text" style="display: none;" autocomplete="false">

    <?php

    include_once 'includes/db.inc.php';

      ?>
    <div class="center">
        
      <?php
                if (isset($_POST['ehelp'])) {
                  $email = $_POST['email'];
                  $sql = "select * from studentlogin where email = '$email';";
                  $res = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($res)) { ?>
              <div class="form-group">
                <label for="exampleInputEmail1">Security Question</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="secque" placeholder="<?php echo $row['secque']; ?>" 
                style="width: 350px;" disabled>
              </div> 
              <div style="display: none;">
                <input type="text" name="username" value="<?php echo $row['uname']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Your Answer</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="answer" placeholder="Answer" style="width: 350px;">
              </div>
              <button type="submit" class="btn" name="submit" style=" color: white;
									font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Next</button>
                  <?php
                  }
                }
              ?>  
        </div>


  </form>
</div>
</div>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#change").addClass("active");
        
      });
    </script>
  </body>
</html>

