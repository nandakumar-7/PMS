<?php
  session_start();
  session_destroy();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="images/logo.png" style="width: 30px; height: 30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" id="home">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#users">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#users">Student</a>
      </li>
      <li class="nav-item" id="about">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php">Sign Up</a>
      </li>
      <li class="nav-item">
        
      <a class="nav-link" href="dark/index.php"><span class="badge badge-dark">Dark Theme</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>
    </form>
  </div>
</nav>