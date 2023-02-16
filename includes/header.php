<?php
//start session
@session_start();


//check to see if a user is logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
  $login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
  $name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
  $role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
  $session_id = $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $page_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/wallpaperhome.css"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class=" navbar-brand"><i class="fa fa-clock-o fa-lg"></i> Videos</a>
    </div>
    <div class="navbar-right">
      <div id="navbar" class="navbar-collapse collapse inline">
        <?php
        if ($role == 1) : ?>
          <ul class="nav navbar-nav">
            <li class="text-capitalize"> Welcome, <?php echo $name; ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="home.php">HOME</a></li>
                <li><a href="registration.php">Register</a></li>
                <li><a href="addvideos.php">Add Videos</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        <?php
        endif;
        if ($role == 2) : ?>
          <ul class="nav navbar-nav inline">
            <li class="text-capitalize">Welcome, <?php print_r($name); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="home.php">HOME</a></li>
                <li><a href="useraccount.php">Update</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        <?php
        endif;
        if (empty($login)) : ?>
          <form class="navbar-form navbar-right" role="form" action="login.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success">SIGN IN</button>
          </form>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="home.php">HOME</a></li>
                <li><a href="registration.php">Register</a></li>
              </ul>
            </li>
          </ul>
        <?php endif; ?>

      </div>
    </div><!--/.navbar-right -->
  </div>
</nav><br><br><br><br>