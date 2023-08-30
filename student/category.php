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
    	<?php include_once 'includes/nav.php' ?>
        <h1 align="center">Select Job Category</h1> <br> <br> 
    <div class="card-group" style="margin-left: 250px; display: flex;">
          <a href="applyit.php" class="btn btn-light">
          <div class="card" style="width: 400px; border: none;" align="center">
            <img src="../images/it.png" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center">IT</h5>
              <p class="card-text"><small class="text-muted">Developer, Tester, Engineer</small></p>
            </div>
          </div>
          </a>
          <a href="applybpo.php" class="btn btn-light">
          <div class="card" style="width: 400px; border: none;" align="center">
            <img src="../images/bpo.png" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <br><h2 class="card-title" align="center">BPO</h5>
              <p class="card-text"><small class="text-muted">Call Centers, HR, Voice Processing</small></p>
            </div>
          </div>
          </a>
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