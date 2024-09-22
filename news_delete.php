<?php
 include('php/database.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from news where id='$id' ");
 if ($query) {
 	 echo "<script> alert('News deleted !')</script> ";
  	   echo "<script >window.location='news_control.php' ;</script>";
 
 }else{
 	echo "Please Try again";
 }

?>