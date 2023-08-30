<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if (isset($_POST['login'])) {
		include_once '../../includes/db.inc.php';
		$sql = "select uname, pwd from adminlogin where uname = '$user' and pwd = '$pass'";
		$result = mysqli_query($conn, $sql);
		$check = mysqli_num_rows($result);
		if ($check > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['user'] = $user; 
				header("Location: ../index.php?result=success");
			}
		} else {
			 header("Location: ../login.php?result=fail");
		}
	} else {
			header("Location: ../login.php?result=failure");
	}

?>
