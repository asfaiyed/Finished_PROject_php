<?php

	$host = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$database = "webtech";
$con = mysqli_connect($host,$dbuser,$dbpass,$database);
	if($con)
	{
		echo "";
	}
	else
	{
		die("Connection failed because ".mysqli_connect_error());
	
	}
	
	
	
	
	
	
	
?>