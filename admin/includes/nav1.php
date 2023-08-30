<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="../images/logo.png" style="width: 30px; height: 30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" id="add">
        <a class="nav-link" href="addadmin.php">Add Admin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="change">
        <a class="nav-link" href="changepass.php">Change Password<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="home">
        <a class="nav-link" href="index.php">Get Back<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="help">
        <a class="nav-link" href="../dark/admin/addadmin.php"><span class="badge badge-dark">Dark Theme</span></a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
          <li class="nav-item dropdown">
          <button class="btn btn-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="outline: 0 none;">
            <i class="far fa-user-circle" style="font-size: 20px;"></i>&nbsp;<?php echo $_SESSION['username']; ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.php"><i class="fas fa-home" style="font-size: 15px;"></i>&nbsp;Home</a>
            <a class="dropdown-item" href="addcompanies.php"><i class="fas fa-plus" style="font-size: 15px;"></i>&nbsp;Add Company</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login.php">Logout</a>
          </div>
        </li>
      </form>
  </div>
</nav>