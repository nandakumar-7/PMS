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
      <h1 class="form-row justify-content-center">View Applied Company</h1> <br>
       <form>
     <!-- <img src="images/1.jpg"> -->
   
     <div class="table-responsive">
    <table class="table table-hover table-borderless table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Company Name</th>
          <th scope="col">Student Name</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
     <?php
            $user = $_SESSION['username'];
            $sql = "select * from applied where name='$user' and status='Selected';";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                ?>
          <?php
                  echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['company'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['status'].'</td>';
                  echo '</tr>';
                  ?>
                <?php
              }
            } else {
              ?>
               <p class="lead" align="center">You are not selected for any company<p>
                <?php
            }
           ?>
    
                </tr>
                  </tbody>
                </table>
                </div>
   </form>
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#select").addClass("active");
        
      });
    </script>
</body>
</html>