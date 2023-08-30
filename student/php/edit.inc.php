<?php
if (isset($_POST['edit'])) {
                include_once '../includes/db.inc.php';
                $id = $_POST['id'];
                $uname = $_POST['uname'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $course = $_POST['course'];
                $yop = $_POST['yop'];
                $percentage = $_POST['percentage'];
                $sslc = $_POST['sslc'];
                $puc = $_POST['puc'];
                    $sql = "update studentlogin set uname='$uname', fname='$fname', lname='$lname', email= '$email', phone='$phone', course='$course'
                    , yop='$yop', percentage='$percentage', sslc='$sslc', puc='$puc' where id='$id';";
                     
                    $res = mysqli_query($conn, $sql);
                    if  (!$res) {
                        ?>
                        <script>
                            alert("Profile couldn't be edited!");
                            window.location.replace("../editprofile.php");
                        </script>
                     <?php
                    } else {
                        ?>
                    <script>
                        alert("Profile has been edited");
                        window.location.replace("../editprofile.php");
                    </script>  
                    <?php
                    }
                
            }
                ?>