<?php
    session_start();
    include_once '../includes/db.inc.php';
    if (isset($_POST['joinnow'])) {
        $course = $_POST['course'];
        $user = $_SESSION['username'];
        $sql = "insert into joincourse(course, student) values('$course', '$user');";
        mysqli_query($conn, $sql);
    }
?>