<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/addcomp.css"> -->
    <?php include_once 'includes/head.php' ?>

</head>
<body>

      <?php include_once 'includes/nav.php' ?>
    <div class="container">
      <h1 class="form-row justify-content-center" style="margin-left: 100px;">Help</h1> <br>
      <br> <br>
      <h3>1. Homepage</h3> <br>
      <img src="../images/SS/home.png" alt="" width="1200px" class="img-thumbnail">
      <p></p><br> <p><br></p>
      <h3>2. Apply for a Company</h3> <br>
      <img src="../images/SS/applynow.png" alt="" width="1200px" class="img-thumbnail">
      <p></p><br> <p><br></p>
      <h3>3. Select Job Category</h3> <br>
      <img src="../images/SS/select.png" alt="" width="1200px" class="img-thumbnail">
      <p></p><br> <p><br></p>
      <h3>4. Click on Apply</h3> <br>
      <img src="../images/SS/apply.png" alt="" width="1200px" class="img-thumbnail">
      <p></p><br> <p><br></p>
      <h3>5. Click on a Company</h3> <br>
      <img src="../images/SS/company.png" alt="" width="1200px" class="img-thumbnail">
      <p></p><br> <p><br></p>
      <h3>6. Update your Status</h3> <br>
      <img src="../images/SS/status.png" alt="" width="1200px" class="img-thumbnail">
    </div>
    <br><br>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#help").addClass("active");
        
      });
    </script>
</body>
</html>