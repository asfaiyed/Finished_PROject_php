<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: ../views/loginA.php");
	}
      

	if(isset($_POST['deleteMyself'])){
		$realname=$_COOKIE['username'];
		$name=$_POST['nname'];
		
		if($name !==""){
			
			if($name==$realname){
				$deletemyself=deactivateProfile($name);
				if($deletemyself){echo "You  are deactivated  !";echo "<a href='../views/loginA.php'>OKAY !!</a>";}else{"Error!";}
			}else{echo "This is not your name! Try again <br>";
					echo "<a href='../views/deactivateprofile.php'>Back</a>"; 
					}
			
	}else{echo "please nick name !";}}
	
	?>