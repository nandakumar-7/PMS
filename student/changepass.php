<!doctype html>
<html lang="en">
  <head>
    

    <?php include_once 'includes/head.php'; ?>
    <?php include_once 'includes/footer.php'; ?> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/change.css">
    <title>Change Password</title>
  </head>
  <body>
    <div>
      <img id="img2" src="../images/pass.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%;
       margin-top: 20vh;">
    </div>
    <img src="../images/aboutbg.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php'; ?>
    <div class="content">
        <br> <br> 
    <h1 align="center" style="margin-left: 50px;">Change Password</h1> <br>
    <br><br>
    <div class="row justify-content-center">
    <form action="php/changepass.inc.php" method="POST">

    <?php

    include_once '../includes/db.inc.php';

      ?>
    <div class="center">
      <div class="form-group ">
        <label>Enter Password</label>
        <input type="password" class="form-control" id="id" name="pwd1">
        </div>
      <div class="form-group ">
        <label>Confirm Password</label>
        <input type="password" class="form-control" id="itemname" name="pwd2">
        </div>


      <button type="submit" class="btn" name="change" style=" color: white;
									font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Change Password</button>
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

