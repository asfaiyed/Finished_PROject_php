<?php
session_start();

require("../service/tconnection.php");

$id = $_GET['id'];



$sql = "DELETE FROM grade WHERE id='$id'";

 $data = mysqli_query($con,$sql);
 if($data)
 {
	 echo "<script>alert('Record Deleted')</script>"; 
 ?>
 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://127.0.0.1/Teacher/views/tgradescheck.php">
 <?php
 }
 else
 {
	 echo "<font color='red'>Sorry, Delete Process Failed";
 }


?>