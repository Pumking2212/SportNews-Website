

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Admin Dashboard </title>
   
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href=" css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php

      

      $userInfo = $_SESSION["user"];
      echo "Welcome, " . $userInfo["full_name"];
      ?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout_dashboard.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='home'){echo 'active';} ?>" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item <?php if($_SESSION['user']['user_role'] == 2){echo 'd-none';} ?>">
                        <a class="nav-link <?php if($page=='account'){echo 'active';} ?>" href="account_control.php">
                            <span data-feather="shopping-cart"></span>
                            User Information
                        </a>
                    </li>
                    <li class="nav-item <?php if($_SESSION['user']['user_role'] == 2){echo 'd-none';} ?>">
                        <a class="nav-link <?php if($page=='Comments'){echo 'active';} ?>" href="comment_control.php">
                            <span data-feather="bar-chart-2"></span>
                            Comments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='news'){echo 'active';} ?>" href="news_control.php">
                            <span data-feather="shopping-cart"></span>
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='category'){echo 'active';} ?>" href="category.php">
                            <span data-feather="users"></span>
                            Categories
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
