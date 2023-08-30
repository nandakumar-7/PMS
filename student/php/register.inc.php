<?php 
	include_once '../../includes/db.inc.php';
	if (isset($_POST['signup'])) {
		$uname = $_POST['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mailid = $_POST['mailid'];
		$phone = $_POST['phone'];
		$pwd1 = $_POST['pwd1'];
		$pwd2 = $_POST['pwd2'];
		$secque = $_POST['secque'];
		$secans = $_POST['secans'];

		$sql = "insert into studentlogin (uname, fname, lname, email, phone, pwd, secque, secans) values('$uname', '$fname', '$lname', '$mailid', '$phone', '$pwd1','$secque', '$secans');";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			header("Location: ../register.php?result=fail");
		} else {
			header("Location: ../login.php?result=success");
		}
	}
?>