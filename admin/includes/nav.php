<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="../images/logo.png" style="width: 30px; height: 30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" id="home">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="addcompanies.php">Add Company</a>
          <a class="dropdown-item" href="viewcompanies.php">View Company</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewstudents.php">View Students</a>
          <a class="dropdown-item" href="companiesapplied.php">Companies Applied</a>
          <a class="dropdown-item" href="selectedstudents.php">Selected Students</a>
      </li>
      <li class="nav-item" id="help">
        <a class="nav-link" href="../dark/admin/index.php"><span class="badge badge-dark">Dark Theme</span></a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
          <li class="nav-item dropdown" style="list-style: none;">
          <button class="btn btn-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="outline: 0 none;">
            <i class="far fa-user-circle" style="font-size: 20px;"></i>&nbsp;<?php echo $_SESSION['username']; ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="addadmin.php"><i class="fas fa-user-plus" style="font-size: 15px;"></i>&nbsp;Add Admin</a>
            <a class="dropdown-item" href="changepass.php"><i class="fas fa-pen" style="font-size: 15px;"></i>&nbsp;Change Password</a>
            <a class="dropdown-item" href="help.php"><i class="fas fa-question" style="font-size: 15px;"></i>&nbsp;Help</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login.php">Logout</a>
          </div>
        </li>
      </form>
  </div>
</nav>