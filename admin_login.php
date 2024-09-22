<?php
session_start();

if (isset($_SESSION["user"])) {
    header("Location: dashboard.php");
    exit; 
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "php/database.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            if ($user["user_role"] == 1 || $user["user_role"] == 2) { 
                $_SESSION["user"] = $user; 
                header("Location: dashboard.php");
                exit; 
            } else {
                echo "<div class='alert alert-danger'>You don't have permission to access the dashboard.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not match</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Pumking Sports News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/styleregis.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
</head>
    <main>
    <div class="container_regis">
            
            <form action="admin_login.php" method="post">
            <div class="form-group_regis">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group_regis">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            </form>
        </div>
      </main>
</html>