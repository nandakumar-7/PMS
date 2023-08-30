<?php 
	include_once '../../includes/db.inc.php';
	if (isset($_POST['add'])) {
		$course = $_POST['course'];
		$lecturer = $_POST['lecturer'];

		$sql1 = "INSERT INTO `training` (`course`, `lecturer`) VALUES ('$course', '$lecturer');";
		$res1 = mysqli_query($conn, $sql1);
		if (!$res1) {
			?>
			<script>
				alert("Training course could not be added!!");
				window.location.replace("../addtraining.php?result=fail");
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Training Course has been added successfully");
				window.location.replace("../viewtraining.php?result=success");
			</script>
			<?php
		}
	}

	if (isset($_POST['update'])) {
		$cid = $_POST['cid'];
		$course = $_POST['course'];
		$lecturer = $_POST['lecturer'];

		$sql = "update training set course='$course', lecturer='$lecturer' where id='$cid';";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			?>
			<script>
				alert("Training course could not be edited!!");
				window.location.replace("../edittraining.php?result=fail");
			</script>
			<?php
		} else {
			?>
			<script>
				alert("Training Course has been updated successfully");
				window.location.replace("../viewtraining.php?result=success");
			</script>
			<?php
		}
	}
?>