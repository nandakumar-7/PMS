
 <?php 
  include_once '../includes/db.inc.php'; 
  if (isset($_POST['submit'])) {
  $ans = $_POST['answer'];
  $username = $_POST['username'];  
  echo $username;
    $sql = "select * from studentlogin where uname = '$username';";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
      $dbans = $row['secans'];
      if ($dbans == $ans) {
        header("Location: ../newpass.php?username=$username");
      } else { ?>
          <script type="text/javascript">
            alert("Answers didnt match");
            window.location.replace("../forgot.inc.php");
          </script>
       <?php   
      }
    }
  }
?>