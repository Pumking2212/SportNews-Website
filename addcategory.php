<?php
session_start();
if (!isset($_SESSION["user"])) {
    header('location:admin_login.php');
    exit; 
}
$page = 'category';
include('include/header.php');

include('php/database.php');

if (isset($_POST['submit'])) {
    $category_name = $_POST['category'];
    $des = $_POST['des'];

    $check_query = "SELECT * FROM category WHERE category_name = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $category_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('Category Name Already Be taken !!')</script>";
        exit(); 
    }

   
    $insert_query = "INSERT INTO category (category_name, des) VALUES (?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("ss", $category_name, $des);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Category Added Successfully!</div>";
    } else {
		echo "<script> alert('Failed to add category. Please try again!!')</script>";
    }
}
?>
<head>
<link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/styleregis.css">
    <link rel="stylesheet" href="css/aos.css">
    
</head>
<main>
<div style="margin-left:16%; width: 90%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active"><a href="category.php">Home</a></li>
    <li class="breadcrumb-item active">Add Category</li>
  </ul>

<div class = "container_category">
    <form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateform()">
        <h1>Add Categories</h1>
        <hr>
        <div class="form-group_regis">
            <label for="email">Category:</label>
            <input type="text" placeholder="Enter Category Name" name="category" class="form-control" id="email">
        </div>
        <div class="form-group_regis">
            <label for="comment">Description:</label>
            <textarea class="form-control" placeholder="Enter Category Description" rows="5" name="des" id="comment"></textarea>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
    </form>
    <script>
        function validateform() {
            var x = document.forms['categoryform']['category'].value;
            if (x == null || x == "") {
                alert('Category Must Be Filled Out !');
                return false;
            }
        }
    </script>
</div>
</main>


<?php
include('include/footer.php');
?>
