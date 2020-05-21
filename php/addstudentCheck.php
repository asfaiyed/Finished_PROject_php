<?php
session_start();
if(!isset($_COOKIE['username'])){  
		header("location: ../views/loginA.php");
	}
     
      include('../service/functions.php');

	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$nname = $_POST['nname'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$education = $_POST['education'];
		$type = "student";
		
		$filename = $_FILES["mypic"]["name"];
		$tempname = $_FILES["mypic"]["tmp_name"];
		$folder = "../views/upload/".$filename;
		move_uploaded_file($tempname,$folder);
		
		
		
		if(empty($fname) or empty($nname) or empty($password) or empty($email) or empty($gender)  or empty($education)   )
		{
			
			echo "No fields can be empty !";
		}else{
			$fullname=validateFullname($fname);
			$nickname=validateNickname($nname);
			$pass=validatePassword($password);
			
			
			if(($fullname==true) AND ($nickname==true) AND ($pass==true)){
				
					$reg = register($fname, $nname, $password, $email,$folder,$education,$type,$gender);
										if($reg){
						
											echo "<section class='main'>
											</br></br></br></br></br></br>
											<table align='center' border='' >
											<tr>
											<td width=300px text-align:center><span style='color:#00FF00'><b>$nname has been added!</b></span></td>
											</tr>
											
									
											</table>
											</section>";
						
										}else{
						
											echo "<section class='main'>
											</br></br></br></br>
											<table align='center' border='1' BORDERCOLOR=#FF0000>
											<tr>
											<td> ErRor</td>
											</tr>
											</table>
											</section>";
			          
										}
										
										
									
									
										
		}else{
				
						if($fullname==false){ echo "Full name must contain two words !";}
						if($nickname==false){ echo "Nickname already exists,Try a different one!";}
						if($pass==false){ echo "Please check password rules: <br> Password must be at least 6 character ";}
						
				
				
				
				
				
				
				}
			
		}
		
	}
	echo "<div align='left'><a href='../views/studentinformation.php'>Back</a></div>";
	
?>	


