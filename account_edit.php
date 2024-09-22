<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["user"])) {
  header('location:admin_login.php');
  exit;
}

$page = 'category';
include('include/header.php');

?>

<?php
include('php/database.php');
$id = $_GET['edit'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id' ");

while ($row = mysqli_fetch_array($query)) {
  $user_role = $row['user_role'];
}
?>

<head>

</head>
<style>

</style>
<div style="margin-left:16%; width: 90%;">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="account_control.php">Account</a></li>
        <li class="breadcrumb-item active">Edit Accounts</li>
    </ul>
</div>
<div style=" width: 70%; margin-left: 25%; margin-top: 10%">

  <form action="account_edit.php" method="post" name="account" onsubmit="return validateform()">
    <h1>Update User Role</h1>
    <hr>
    <div class="form-group">
      <label for="user_role">User Role:</label>
      <input type="text" name="user_role" value="<?php echo $user_role; ?>" class="form-control" id="user_role">
    </div>
    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
    <input type="submit" name="submit" class="btn btn-primary" value=" Update User Role">
  </form>
  <script>

    function validateform() {
      var x = document.forms['categoryform']['user_role'].value;
      if (x == "") {
        alert('User Role Must Be Filled Out !');
        return false;
      }

      if (x != "0" && x != "1") {
        alert('User Role must be either 0 or 1');
        return false;
      }
    }

  </script>

</div>

<?php
include('php/database.php');
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $user_role = $_POST['user_role'];

  if ($user_role != "0" && $user_role != "1") {
    echo "<script>alert('User Role must be either 0 or 1')</script>";
  } else {
    $query1 = mysqli_query($conn, "UPDATE users SET user_role='$user_role' WHERE id='$id' ");
    if ($query1) {
      echo "<script>alert('User Role Updated Successfully !')</script>";
      echo "<script >window.location='account_control.php' ;</script>";
    } else {
      echo "<script>alert('User Role Not Updated!')</script>";
    }
  }
}
?>

<?php
include('include/footer.php');
?>
