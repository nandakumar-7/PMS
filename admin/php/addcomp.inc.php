<?php 
	include_once '../../includes/db.inc.php';
	if (isset($_POST['add'])) {
		$cname = $_POST['cname'];
		$website = $_POST['website'];
		$ctype = $_POST['ctype'];
		$status = $_POST['status'];
		$address = $_POST['address'];
		$phone = $_POST['telephone'];

		$sql1 = "INSERT INTO `company` (`id`, `name`, `type`, `address`, `number`, `website`, `status`) VALUES (NULL, '$cname', '$ctype', '$address', '$phone', '$website', '$status');";
		$res1 = mysqli_query($conn, $sql1);
		if (!$res1) {
			?>
			<script>
				alert("Company could not be added");
				window.location.replace("../addcompanies.php?result=fail");
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Company has been added successfully");
				window.location.replace("../viewcompanies.php?result=success");
			</script>
			<?php
		}
	}

	if (isset($_POST['update'])) {
		$cid = $_POST['cid'];
		$cname = $_POST['cname'];
		$website = $_POST['website'];
		$ctype = $_POST['ctype'];
		$status = $_POST['status'];
		$address = $_POST['address'];
		$phone = $_POST['telephone'];
		$minperc = $_POST['minperc'];

		$sql = "update company set name='$cname', website='$website', address='$address', type='$ctype', status='$status', number='$phone', minperc='$minperc' where id='$cid';";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			?>
			<script>
				alert("Company could not be updated");
				window.location.replace("../editcomp.php?result=fail");
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Company has been updated");
				window.location.replace("../viewcompanies.php?result=success");
			</script>
			<?php
		}
	}
?>