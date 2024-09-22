<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["user"])) {
  header('location:admin_login.php');
  exit;
}

$page = 'news';
include('include/header.php');

$page_number = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 3;
$start_record = ($page_number - 1) * $records_per_page;

include('php/database.php');

?>
<div style="margin-left:16%; width: 90%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active">News</li>
  </ul>
</div>

<div style="width: 70%; margin-left: 20%; margin-top: 5%">
  <div class="text-right">
    <a class="btn btn-primary" href="AddNews.php">Add News</a>
  </div>
  <table class="table table-bordered">
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Content</th>
      <th>Date</th>
      <th>Category</th>
      <th>Thumbnail</th>
      <th>Addtional Img</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM news LIMIT $start_record, $records_per_page");
    while ($row = mysqli_fetch_array($query)) {
      $news_id = $row['id'];
      $additional_images_query = mysqli_query($conn, "SELECT * FROM news_images WHERE news_id = $news_id");
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo substr($row['description'], 0, 100); ?>...</td>
        <td><?php echo substr($row['content'], 0, 100); ?>...</td> 
        <td><?php echo date("F jS, Y", strtotime($row['date'])); ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><img class="img img-thumbnail" src="image/<?php echo $row['thumbnail']; ?>" alt="" width="150" height="150"></td>
        <td>
          <?php 
          while ($image_row = mysqli_fetch_array($additional_images_query)) {
            echo '<img class="img img-thumbnail" src="image/' . $image_row['image'] . '" alt="" width="150" height="150"><br>';
          }
          ?>
        </td>
        <td><a class="btn btn-info btn-sm" href="news_edit.php?edit=<?php echo $row['id']; ?>">edit</a></td>
        <td><a class="btn btn-danger btn-sm" href="news_delete.php?del=<?php echo $row['id']; ?>">delete</a></td>
      </tr>
    <?php } ?>
  </table>
  <ul class="pagination">
    <li class="page-item <?php echo ($page_number <= 1) ? 'disabled' : ''; ?>">
      <a href="news_control.php?page=<?php echo $page_number - 1; ?>" class="page-link">Previous</a>
    </li>
    <?php
    $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM news")) / $records_per_page);
    for ($i = 1; $i <= $total_pages; $i++) {
      ?>
      <li class="page-item <?php echo ($i == $page_number) ? 'active' : ''; ?>">
        <a href="news_control.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
      </li>
    <?php } ?>
    <li class="page-item <?php echo ($page_number >= $total_pages) ? 'disabled' : ''; ?>">
      <a href="news_control.php?page=<?php echo $page_number + 1; ?>" class="page-link">Next</a>
    </li>
  </ul>
</div>

<?php
include('include/footer.php')
?>
