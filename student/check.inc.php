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
        <img id="img2" src="../images/graph1.svg" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%;
         margin-top: 19vh;">
    </div>
    <img src="../images/apply.png" id="img1" style="position: fixed;">
        <?php include_once 'includes/nav.php' ?> 
    <div class="content" style="margin-top: 10px; margin-left: 30px;">
    <br> <br><h2><u>Apply For a Company</u></h2>
        <br> <br> <br> 
        <?php
    include_once '../includes/db.inc.php';
    if (isset($_POST['check'])) {
        $company = $_POST['company'];
        $user = $_SESSION['username'];
        $sql = "select * from company where name='$company';";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $compperc = $row['minperc'];
                $sql1 = "select * from studentlogin where fname='$user';";
                $res1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($res1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($res1)) {
                        $studperc = $row1['percentage'];
                        if ($studperc >= $compperc) {
                            if ($studperc > 85) {
                            ?>  
                                <h5>Good Job, Your Percentage is matching for <b><?php echo $company; ?></b></h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                    <div class="progress" style="position:absolute; width: 500px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" 
                                        aria-valuemin="0" aria-valuemax="100" name="chances">90%</div>
                                    </div> <br> <br>
                                    <p class="lead">Apply for it right now!</p>
                                    <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i> Make sure you have updated your percentage 
                                    in <b><u><a href="editprofile.php" class="text-danger">Edit Profile</a></u></b> section!</p>
                                    <a href="php/apply.inc.php?comp=<?php echo $company; ?>" class="btn" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);" name="apply">Apply</a>
                            <?php

                            } else if ($studperc > 75) {
                                ?>  
                                <h5>Good Job, Your Percentage is matching for <br> <b><?php echo $company; ?></b></h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                    <div class="progress" style="position:absolute; width: 500px;" name="chances">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" 
                                        aria-valuemin="0" aria-valuemax="100" name="chances">80%</div>
                                    </div> <br> <br>
                                    <p class="lead">Apply for it right now!</p>
                                    <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i> Make sure you have updated your percentage 
                                    in <b><u><a href="editprofile.php" class="text-danger">Edit Profile</a></u></b> section!</p>
                                    <a href="php/apply.inc.php?comp=<?php echo $company; ?>" class="btn" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);" name="apply">Apply</a>    
                            <?php
                            } else {
                                ?>  
                                <h5>Not Bad, Your Percentage is quite matching for <br> <b><?php echo $company; ?></b></h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                    <div class="progress" style="position:absolute; width: 500px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" 
                                        aria-valuemin="0" aria-valuemax="100" name="chances">60%</div>
                                    </div> <br> <br>
                                    <p class="lead">You can try applying for it!</p>
                                    <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i> Make sure you have updated your percentage 
                                    in <b><u><a href="editprofile.php" class="text-danger">Edit Profile</a></u></b> section!</p>
                                    <a href="php/apply.inc.php?comp=<?php echo $company; ?>" class="btn" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);" name="apply">Apply</a>
                            <?php
                            }
                            ?>
                            <?php
                        } else {
                            ?>  
                                <h5>Your Percentage for <b><?php echo $company; ?></b><br> doesn't match expectations</h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                    <div class="progress" style="position:absolute; width: 500px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" 
                                        aria-valuemin="0" aria-valuemax="100" name="chances">50%</div>
                                    </div> <br> <br>
                                    <p class="lead">Sorry, you are not eligible for it!</p>
                                    <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i> Make sure you have updated your percentage 
                                    in <b><u><a href="editprofile.php" class="text-danger">Edit Profile</a></u></b> section!</p>
                                    <button href="php/apply.inc.php?comp=<?php echo $company; ?>" class="btn btn-disabled" name="apply" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);" disabled>Apply</button>
                            <?php
                        }
                    }
                }
            }
        }
    }
    ?>
    </div>
    <br> <br> <br> <br> <br>
   

    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#apply").addClass("active");
        
      });
    </script>
</body>
</html>




















