<?php
session_start();
error_reporting(0);
if (!isset($_SESSION["user"])) {
    header('location:admin_login.php');
    exit;
}

$page = 'account';
include('include/header.php');

$page_number = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 3;
$start_record = ($page_number - 1) * $records_per_page;

include('php/database.php');

?>
<div style="margin-left:16%; width: 90%;">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Account Control</li>
    </ul>
</div>

<div style="width: 70%; margin-left: 20%; margin-top: 5%">
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>User Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $query = mysqli_query($conn, "SELECT * FROM users LIMIT $start_record, $records_per_page");
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['user_role']; ?></td>
                <td><a class="btn btn-info btn-sm" href="account_edit.php?edit=<?php echo $row['id']; ?>">edit</a></td>
                <td><a class="btn btn-danger btn-sm" href="account_delete.php?del=<?php echo $row['id']; ?>">delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <ul class="pagination">
        <li class="page-item <?php echo ($page_number <= 1) ? 'disabled' : ''; ?>">
            <a href="account_control.php?page=<?php echo $page_number - 1; ?>" class="page-link">Previous</a>
        </li>
        <?php
        $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users")) / $records_per_page);
        for ($i = 1; $i <= $total_pages; $i++) {
            ?>
            <li class="page-item <?php echo ($i == $page_number) ? 'active' : ''; ?>">
                <a href="account_control.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
            </li>
        <?php } ?>
        <li class="page-item <?php echo ($page_number >= $total_pages) ? 'disabled' : ''; ?>">
            <a href="account_control.php?page=<?php echo $page_number + 1; ?>" class="page-link">Next</a>
        </li>
    </ul>
</div>

<?php
include('include/footer.php')
?>
