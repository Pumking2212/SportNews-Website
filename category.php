<?php
session_start();
if (!isset($_SESSION["user"])) {
    header('location:admin_login.php');
    exit; 
}
$page = 'category';
include('include/header.php');
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    
    
    <style>
        
        .content {
          margin: auto;
          
          
          width: 70%; margin-left: 25%; margin-top: 10%;
          margin-bottom: 50%
        }
    </style>
</head>

<main>
<div style="margin-left:16%; width: 90%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active">Category</li>
  </ul>
</div>
    <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
        <div class="text-right mb-3">
            <div class="btn-group">
                <a class="btn btn-primary" href="addcategory.php">Add Category</a> 
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            include('php/database.php');
            $query=mysqli_query($conn,"select * from category");
            while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td><?php echo substr($row['des'],0,200 );?></td>
                <td> <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" >edit</a></td>
                <td> <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger" >delete</a></td>
            </tr>
            <?php } ?>  
        </table>
    </div>
</main>

<?php
include('include/footer.php')
?>
