<?php
	include_once 'includes/db.inc.php';
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd1'];
	session_start();
	if(isset($_POST['login'])) {
		$sql = "select * from adminlogin where uname = '$uname' and pwd = '$pwd';";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
		if($resCheck > 0) {

			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['username'] = $row['uname'];
				header("Location: admin/index.php");
			}
		} else {
			$sql1 = "select * from studentlogin where uname = '$uname' and pwd = '$pwd';";
			$result1 = mysqli_query($conn, $sql1);
			$resCheck1 = mysqli_num_rows($result1);
			if($resCheck1 > 0) {
			while ($row1 = mysqli_fetch_assoc($result1)) {
				$_SESSION['username'] = $row1['fname'];
				header("Location: student/index.php");
				} 
			} else {
				?>
                <script>
                    alert("Username and Password Incorrect!");
                    window.location.replace("login.php");
                </script>
            <?php
		} 
		} 
	}
		
