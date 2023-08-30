<?php
if (isset($_POST['update'])) {
                include_once '../includes/db.inc.php';
                $id = $_POST['id'];
                $name = $_POST['name'];
                $company = $_POST['company'];
                $status = $_POST['status'];
                    $sql = "update applied set status='$status' where id='$id';";
                     
                    $res = mysqli_query($conn, $sql);
                    if  (!$res) {
                        ?>
                        <script>
                            alert("Details couldn't be edited!");
                            window.location.replace("../viewapply.php");
                        </script>
                     <?php
                    } else {
                        ?>
                    <script>
                        alert("Details has been edited");
                        window.location.replace("../viewapply.php");
                    </script>  
                    <?php
                    }
                
            }
                ?>