<?php
	include('../service/s_update_validation.php');
	
	$fonts= "verdana";
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
		$new=$_SESSION['nname'];
		
	}
	
	include('../service/function.php');
	$con = getConnection();
	$sql = "select * from users where nname='{$_SESSION['nname']}'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);

	
	
				if($_SERVER["REQUEST_METHOD"] == "POST" )
					{
						global $new;
								$fname=		$_POST["fname"];
								
								$n_password=	$_POST["n_password"];
								$p_password=	$_POST["p_password"];
								$education=	$_POST["education"];
								$email=     $_POST["email"];
							
							
								$filename = $_FILES["mypic"]["name"];
								$tempname = $_FILES["mypic"]["tmp_name"];
								$folder = "../views/upload/".$filename;
								move_uploaded_file($tempname,$folder);
	
							
							if($folder!="")
								{
									$con=mysqli_connect('localhost','root','','webtech');
									$sql = "UPDATE `users` SET picsource='$folder' WHERE nname='$new'";
									$run=mysqli_query($con, $sql);
							
								}
							

								Validation($fname);
								fname($fname);
								if($p_password != $user['password'])
									{
										passwordf();
										
									}
								if(strlen($n_password) < 5)
									{
										$n_password=$p_password;
										
									}
				
							if($flag_err==0)
									{
										
										congratulation($fname,$n_password,$education,$email);
										
									}
								
							
					}
					
				
?>


	