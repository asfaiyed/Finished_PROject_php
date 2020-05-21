<?php

session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		require("../service/tconnection.php");

	$name = $_POST['name'];
	
	sleep(3);
	if($name==""){
			echo "<font color='red'>Null Submission Found!";
		}
	
else{
	echo "<font color='green'>POSTED: </font>".$name;
	
	$userprofile = $_SESSION['nname'];

$sql = "INSERT INTO cta (id,name,complain) VALUES('','$userprofile','$name')";
$data = mysqli_query($con, $sql);
if($data)
{

}	
	    	
	
}

?>
