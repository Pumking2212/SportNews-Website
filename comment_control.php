<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["user"])) {
  header('location:admin_login.php');
  exit;
}

$page = 'Comments';
include('include/header.php');

$page_number = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 3;
$start_record = ($page_number - 1) * $records_per_page;

include('php/database.php');

?>
<div style="margin-left:16%; width: 90%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active">Comment</li>
  </ul>
</div>

<div style="width: 70%; margin-left: 20%; margin-top: 5%">
  
  <table class="table table-bordered">
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Delete</th>
  </tr>
  <?php
$query = mysqli_query($conn, "SELECT * FROM `comment`");
  while ($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a class="btn btn-danger btn-sm" href="comment_delete.php?del=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
  <?php } ?>
  </table>
  <ul class="pagination">
    <li class="page-item <?php echo ($page_number <= 1) ? 'disabled' : ''; ?>">
      <a href="comment_control.php?page=<?php echo $page_number - 1; ?>" class="page-link">Previous</a>
    </li>
    <?php
    $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM comment")) / $records_per_page);
    for ($i = 1; $i <= $total_pages; $i++) {
      ?>
      <li class="page-item <?php echo ($i == $page_number) ? 'active' : ''; ?>">
        <a href="comment_control.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
      </li>
    <?php } ?>
    <li class="page-item <?php echo ($page_number >= $total_pages) ? 'disabled' : ''; ?>">
      <a href="comment_control.php?page=<?php echo $page_number + 1; ?>" class="page-link">Next</a>
    </li>
  </ul>
</div>

<?php
include('include/footer.php')
?>
