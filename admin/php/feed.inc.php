<?php 
	session_start();
	include_once '../../includes/db.inc.php';
	if (isset($_POST['post'])) {
		$message = $_POST['message'];
		$user = $_SESSION['username'];
		$sql = "insert into feed (user, message, date, time) values('$user', '$message', curdate(), curtime());";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			header("Location: ../index.php?result=fail");
		} else {
			header("Location: ../index.php?result=success");
		}
	}
