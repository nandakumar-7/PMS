<?php
    include_once '../includes/db.inc.php';
    if(isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

       if ($password1 == $password2) {
            $sql = "insert into adminlogin(uname,pwd,fname,lname,email,phone) values('$uname','$password1',
            '$fname','$lname','$email','$phone')"; 
            mysqli_query($conn, $sql);
       } else { 
           include_once 'main.php';
        }
         
    }
?>