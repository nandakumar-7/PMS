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
      <h1 class="form-row justify-content-center" style="margin-left: 100px;">View Company</h1> <br>
       <form>
     <!-- <img src="images/1.jpg"> -->
     <div class="table-responsive">
    <table class="table table-hover table-borderless table-dark">
      <thead>
        <tr>
          <th scope="col">Company Name</th>
          <th scope="col">Type</th>
          <th scope="col">Website</th>
          <th scope="col">Phone</th>
          <th scope="col">Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $sql = "select * from company order by id;";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['type'].'</td>';
                    echo '<td>'.$row['website'].'</td>';
                    echo '<td>'.$row['number'].'</td>';
                    echo '<td>'.$row['status'].'</td>';
                    ?>

                    <td>
                      <a href="editcomp.php?edit=<?php echo $row['id']; ?>" class="btn btn-sm" name="deleteloc"><i class="fas fa-pen" style="color: #3498DB;"></i></a>
                      <a href="php/crud.php?delete=<?php echo $row['id']; ?>" class="btn btn-sm" name="deleteloc"><i class="fas fa-trash" style="color: red;"></i></a>
                    </td>
                    <?php
                  echo '</tr>';
              }
            }
           ?>
      </tbody>
    </table>
    </div>

   </form>
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>