<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['deleteTeacher'])){
		$name=$_POST['nname'];
		
		if($name !==""){
			$checkname=validateTname($name);
			if($row = mysqli_fetch_assoc($checkname)){
				$deleteteacher=deleteTeacher($name);
				if($deleteteacher){echo "$name  has been deleted  !";}else{"Error!";}
			}else{echo "Check name again ! Name does not exist!";}
			
	}else{echo "please give teacher nick name !";}}
	
	?>