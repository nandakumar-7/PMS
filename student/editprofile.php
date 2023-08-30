<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
    	<img id="img2" src="../images/editicon.png" width="650px" style="position: absolute; position: fixed; z-index: 1; 
        margin-left: 55%; margin-top: 13vh;">
    </div>
    <img src="../images/edit.png" id="img1" style="position: fixed;">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
    	<h1 class="form-row justify-content-center" style="margin-left: 100px;">Edit Profile</h1> <br>
    	<form action="php/edit.inc.php" method="POST">
		    <div class="row justify-content-center align-items-baseline">
		      <div class="center one">
                    <?php
                        $user = $_SESSION['username'];
                        $sql = "select * from studentlogin where fname='$user';";
                        $res = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($res) > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="cid">Student ID</label>
                                    <input type="text" class="form-control" id="cid" name="id" value="<?php echo $row['id']; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="cname">Student Username</label>
                                    <input type="text" class="form-control" id="cname" name="uname" value="<?php echo $row['uname']; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="website">First Name</label>
                                    <input type="text" class="form-control" id="website" name="fname" value="<?php echo $row['fname']; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="website" name="lname" value="<?php echo $row['lname']; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <label for="website">Email</label>
                                    <input type="text" class="form-control" id="website" name="email" value="<?php echo $row['email']; ?>">
                                  
                                </div> <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Course</label>
                                    <select class="custom-select" name="course">
                                        <option value="<?php echo $row['course'] ?>"><?php echo $row['course'] ?></option>
                                        <option value="BE/BTECH">BE/BTECH</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BCOM">BCOM</option>
                                        <option value="BCA">BCA</option>
                                        <option value="ME/MTECH">ME/MTECH</option>
                                        <option value="MCOM">MCOM</option>
                                        <option value="MBA">MBA</option>
                                        <option value="MCA">MCA</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" id="website" name="phone" value="<?php echo $row['phone']; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Year Of Pass</label>
                                    <select class="custom-select" name="yop">
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="20226">2026</option>

                                    </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Percentage</label>
                                    
                                    <input type="text" class="form-control" id="website" name="percentage" value="<?php echo $row['percentage']; ?>">
                                    <small>Aggregate of 3 Years</small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="website">10th Percentage</label>
                                    <input type="text" class="form-control" id="website" name="sslc" value="<?php echo $row['sslc']; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">PUC Percentage</label>
                                    <input type="text" class="form-control" id="website" name="puc" value="<?php echo $row['puc']; ?>">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center">
                                    <button type="submit" class="btn col-md-6" name="edit" style=" color: white;
									font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Edit Profile</button>
                                </div> <br> <br>
                                <?php
                            }
                        }
                    ?>
                    
		      </div>
		    </div>
		  </form> 
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>