<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
    	<img id="img2" src="../images/feedicon.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 18vh;">
    </div>
    <img src="../images/feed.png" id="img1" style="position: fixed;">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 20px; margin-left: 10px;">
    	<h1 class="form-row justify-content-center">FEED</h1> <br>
    	<div class="pre-scrollable" style="width: 750px; height: 400px; scroll-behavior: auto;">
         <div style="max-height: 90vh;">
             <div class="card" style="border: none;">
          <div class="card-body">
            <?php
                $sql = "select * from feed order by date desc, time desc;";
                $res = mysqli_query($conn, $sql);
                $rescheck = mysqli_num_rows($res);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <h5 class="card-title"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['user']; ?></h5>
                        <p class="card-text"><?php echo $row['message']; ?></p>
                        <!-- <a href="php/heart.php?heart=<?php echo $row['id']; ?>" class="btn" style="margin-left: -15px;margin-top: -15px;" name="heart"><i class="<?php echo $row['heart']; ?>" id="heart"></i>&nbsp;<small class="lead"><?php echo $row['likes']; ?></small></a> -->
                        <p><small><?php echo $row['date']; ?></small></p> <br>
                        <?php
                    }
                }
            ?>
          </div>
        </div>  
        </div>    
        </div> 
    	 
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script type="text/javascript" src="includes/jquery31.js"></script>
    <script>
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#cat").addClass("active");
        $("#heart").click(function() {
            $("#heart").toggleClass("far fa-heart");
            $("#heart").toggleClass("fas fa-heart");
        })
      });
    </script>
</body>
</html>