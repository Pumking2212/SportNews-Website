<?php
 include('php/database.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from comment where id='$id' ");
 if ($query) {
 	 echo "<script> alert('Comment Deleted !')</script> ";
  	   echo "<script >window.location='comment_control.php' ;</script>";
 
 }else{
 	echo "Please Try again";
 }

?>