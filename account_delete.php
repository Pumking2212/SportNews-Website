<?php
 include('php/database.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from users where id='$id' ");
 if ($query) {
 	 echo "<script> alert('User Deleted !')</script> ";
  	   echo "<script >window.location='account_control.php' ;</script>";
 
 }else{
 	echo "Please Try again";
 }

?>