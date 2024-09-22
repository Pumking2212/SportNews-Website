  <?php
session_start();
error_reporting(0);
if ( isset($_SESSION["user"])) {
  # code...
}else
header('location:admin_login.php');
$page='category';
 include('include/header.php');

  ?>

  <?php
 include('php/database.php');
  $id=$_GET['edit'];

  $query=mysqli_query($conn,"select * from category where id='$id' ");

 while ($row=mysqli_fetch_array($query)) {
 	 $category=$row['category_name'];
  	 $des=$row['des'];

 }
 

  ?>
  <head>
    
</head>
  <style>
      
    </style>
    <div style="margin-left:16%; width: 90%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item active"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active"><a href="category.php">Home</a></li>
    <li class="breadcrumb-item active">Category Edit</li>
  </ul>
  <div style=" width: 70%; margin-left: 25%; margin-top: 10%">
  	   
  	
		<form action="edit.php" method="post" name="categoryform" onsubmit=" return validateform() ">
			<h1>Update Category</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Category:</label>
		    <input type="text" name="category" value="<?php  echo $category;  ?>" class="form-control" id="email">
		  </div>
		  <div class="form-group">
			  <label for="comment">Description:</label>

			 <textarea class="form-control" rows="5" name="des" id="comment"><?php echo $des; ?></textarea>
			</div>
			<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" >
		  <input type="submit" name="submit" class="btn btn-primary" value=" Update Category">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['category'].value;
          if (x=="") {
          	alert('Category Must Be Filled Out !');
          	return false;
          }
       }

		</script>

  </div>

  <?php
include('php/database.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
     $category =$_POST['category'];
     $des=$_POST['des'];

     $query1=mysqli_query($conn,"update category set category_name='$category' , des='$des' where id='$id' ");
     if($query1){
      echo "<div class=' alert alert-danger'>Category Updated Successfully !</div>";
     	
       echo "<script >window.location='category.php' ;</script>";
     	

     }else{
     	echo "Category Not Update";
     }
}


  ?>

  <?php
 include('include/footer.php');

  ?>
