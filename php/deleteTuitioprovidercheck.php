<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['deleteTp'])){
		$name=$_POST['nname'];
		
		if($name !==""){
			$checkname=validateTpname($name);
			if($row = mysqli_fetch_assoc($checkname)){
				$deletetp=deleteTp($name);
				if($deletetp){echo "$name  has been deleted  !";}else{"Error!";}
			}else{echo "Check name again ! Name does not exist!";}
			
	}else{echo "please give Student's nick name !";}}

?>