<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['fullname'])){
		$name=$_COOKIE['username'];
		$fname = $_POST['fname'];
		if($fname !==""){
			$fullname=validateFullname($fname);
			if($fullname==true){
				$changefullname=changefullname($fname,$name);
				if($changefullname){echo "Your full Name has been changed !";}else{"Error!";}
			}else{echo "Full name must contain at least 2 words";}
			
	}else{echo "please write your full name !";}}
	
		
		if(isset($_POST['nickname'])){
		$name=$_COOKIE['username'];
		$nname = $_POST['nname'];
		if($nname !==""){
			$nickname=validateNickname($nname);
			if($nickname==true){
				$changenickname=changeNickname($nname,$name);
				if($changenickname){echo "Your nick name has been  changed !";}else{"Error!";}
			}else{echo "Nickname must be unique and only one word !";}
			
		}else{echo "please write your Nickname to change !";}}
		
		if(isset($_POST['paassword'])){
		$name=$_COOKIE['username'];
		$pass = $_POST['password'];
		if($pass !==""){
			$checkpass=validatePassword($pass);
			if($checkpass==true){
				$changepassword=changePassword($pass,$name);
				if($changepassword){echo "Your password has been changed !";}else{"Error!";}
			}else{echo "Password must contain at least 5 character!!";}
			
	}else{echo "please give a password !";}}
	
	
	
	if(isset($_POST['e_mail'])){
		$name=$_COOKIE['username'];
		$email = $_POST['email'];
		if($email !==""){
			$checkemail=validateEmail($email);
			if($checkemail==true){
				$changeEmail=changeEmail($email,$name);
				if($changeEmail){echo "Your email has been changed !";}else{"Error!";}
			}else{echo "Invalid format";}
			
	}else{echo "please write your email to edit !";}}
	
	
	if(isset($_POST['gen_der'])){
		$name=$_COOKIE['username'];
		$gender = $_POST['gender'];
		if($gender !==""){
			
				$changeGender=changeGender($gender,$name);
				if($changeGender){echo "Your gender has been changed !";}else{"Error!";}
			
			
	}else{echo "please choose your gender !";}}
	
	if(isset($_POST['picturesubmit'])){
		$name=$_COOKIE['username'];
		$filename = $_FILES["mypic"]["name"];
		$tempname = $_FILES["mypic"]["tmp_name"];
		$folder = "../views/upload/".$filename;
		move_uploaded_file($tempname,$folder);
		
		if($folder !==""){
			
				$changefolder=changeFolder($folder,$name);
				if($changefolder){echo "Your profile photo has been changed !";}else{"Error!";}
			
			
	}else{echo "please choose your photo !";}}
	
	
		if(isset($_POST['edu_cation'])){
		$name=$_COOKIE['username'];
		$edu = $_POST['education'];
		if($edu !==""){
			
				$changeedu=changeEducation($edu,$name);
				if($changeedu){echo "Your education info has been changed !";}else{"Error!";}
			
			
	}else{echo "please choose your education !";}}
		
		
		
		
	
?>
		
	
	


