
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
    	<img id="img2" src="../images/trainingicon.png" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%; margin-top: 20vh;">
    </div>
    <img src="../images/training.png" id="img1" style="position: fixed;">
      <?php include_once 'includes/nav.php' ?>
      <br><br> <br> <br><br>
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
    	<h2 style="margin-left: 100px;">Join for a Training</h2>
    </div>
    <br> <br> <br> <br> <br>
         <form action="join.php" method="POST">
            
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Select a Course</label>
              <select class="custom-select" name="course">
              <?php 
                $user = $_SESSION['username'];
                $sql = "select * from training;";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                  ?>
                        <option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?></option>
                  <?php
              }
              }
              ?>
              </select>
            </div>
            <div class="form-group col-md-3">
            <input class="btn" type="submit" name="joinnow" value="Join Now" style="width: 150px; color: white;
			font-weight: bold; background: linear-gradient(to left, #6C63FF, #3F3D56);"> 
            </div>
                       
         </form>

         <?php
    if (isset($_POST['joinnow'])) {
        $course = $_POST['course'];
        $user = $_SESSION['username'];
        $sql = "insert into joincourse(course, student) values('$course', '$user');";
        mysqli_query($conn, $sql);
    }
?>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#apply").addClass("active");
        
      });
    </script>
</body>
</html>









