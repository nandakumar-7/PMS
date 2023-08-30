<?php
    session_start();
    include_once '../includes/db.inc.php';
    if (isset($_GET['comp'])) {
        $company = $_GET['comp'];
        $user = $_SESSION['username'];
        $sql = "insert into applied (company, name) values ('$company', '$user');";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            ?>
                <script>
                    alert("Apply Unsuccessful, Try Again!");
                    window.location.replace("../viewapply.php");
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("You have applied for the company successfully!");
                    window.location.replace("../viewapply.php");
                </script>
            <?php
        }
    }  
?>