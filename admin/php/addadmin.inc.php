
    <?php 
            include_once '../includes/db.inc.php';
            if (isset($_POST['signup'])) {
                $uname = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['mailid'];
                $phone = $_POST['phone'];
                $pwd1 = $_POST['pwd1'];
                $pwd2 = $_POST['pwd2'];
                if ($pwd1 == $pwd2) {
                    $sql = "insert into adminlogin(uname, pwd, fname, lname, email, phone) values('$uname', '$pwd1', '$fname', '$lname', '$email', '$phone');";
                    mysqli_query($conn, $sql);
                    ?>           
                    <script>
                        alert("Admin <?php $fname; ?> has been added successfully");
                        window.location.replace("../addadmin.php");
                    </script>
                    <?php
                } else {
            ?>
                     <script>
                        alert("Admin could not be added, try again!");
                        window.location.replace("../addadmin.php");
                    </script>
                    <?php
                
            }
            } 
        ?>

