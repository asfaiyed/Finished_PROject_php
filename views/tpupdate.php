<?php
	session_start();
		 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");

$_GET['fname'];
$_GET['nname'];
$_GET['password'];
$_GET['email'];
$_GET['id'];
$_GET['gender'];
$_GET['education'];
	?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
<script type="text/javascript">
function valid()
{
var id = document.forms["myform"]["id"].value;



if(id==""){
	alert("ID Can't Be Empty");
return false;

}

	
var fname = document.forms["myform"]["fname"].value;



if(fname==""){
	alert("Fullname Can't Be Empty");
return false;

}
	
	
	
var nname = document.forms["myform"]["nname"].value;



if(nname==""){
	alert("Username Can't Be Empty");
return false;

}



if(nname.length<3){
	alert("Username Can't Be Less Than 3 Letters");
return false;

}




var password = document.forms["myform"]["password"].value;

if(password==""){
	alert("Password Can't Be Empty");
return false;

}

if(password.length<5){
	alert("Password Can't Be Less Than 5 Characters or Digits");
return false;

}





var email = document.forms["myform"]["email"].value;
if(email==""){
	alert("Email Can't Be Empty");
return false;

}


var at=email.indexOf('@');
var dot=email.lastIndexOf('.');
if(at<=0 || at+1 >= dot || dot+1 >=email.length-1)

{
alert("Enter Valid Email Address");
return false;

}




var gender = document.forms["myform"]["gender"].value;

if(gender==""){
	alert("Gender Can't Be Empty");
return false;

}
var education = document.forms["myform"]["education"].value;

if(education==""){
	alert("Education Can't Be Empty");
return false;

}


}
</script>

	
</head>
<body>


			
	<fieldset>
	
	<form name="myform" onsubmit="return valid()" method="GET" action="" enctype="multipart/form-data"">
	
		<h1>UPDATE PROFILE</h1>
	Id<br/><input type="text" name="id" value="<?php echo $_GET['id']; ?>"><br/>
	Fullname<br/><input type="text" name="fname" value="<?php echo $_GET['fname']; ?>"><br/>
		Username<br/><input type="text" name="nname" value="<?php echo $_GET['nname']; ?>"><br/>
		
		
		
			Password<br/><input type="password" name="password" value="<?php echo $_GET['password']; ?>"><br/>
			Email<br/><input type="email" name="email" value="<?php echo $_GET['email']; ?>"><br/>
			
	Gender<br/><input type="text" name="gender" value="<?php echo $_GET['gender']; ?>"><br/>
	Education<br/><input type="text" name="education" value="<?php echo $_GET['education']; ?>"><br/>
			<br/>
			
				
				<input type="submit" name="submit" value="Update">
				
				<a href="../views/tprofile.php">Go to Profile</a>	<br/><br/>
			
	
	</form>
	
<?php

	


if( isset($_REQUEST['submit'])){

$fname = $_GET['fname'];
$nname = $_GET['nname'];
$password = $_GET['password'];
$email = $_GET['email'];
$id = $_GET['id'];
$gender = $_GET['gender'];
$education = $_GET['education'];
	if($id=="")
		
		{
			echo"<font color='red'>ID Can't Be Empty";
			return false;
			
			
		}
		
	
	if($nname=="" || strlen($nname)<3)
		{
			echo"<font color='red'>Username Can't Be Empty or Less Than Three Letters";
			return false;
			
			
		}
		
			if($password=="" || strlen($password)<5)
		
		{
			echo"<font color='red'>Password Can't Be Less Than 5 Characters or Digits";
			return false;
			
			
		}
		
		
		
		
		
		
		
		if($email=="")
		
		{
			echo"<font color='red'>Email Can't Be Empty";
			return false;
			
			
		}
	
			if($gender=="")
		
		{
			echo"<font color='red'>Gender Can't Be Empty";
			return false;
			
			
		}
		if($education=="")
		
		{
			echo"<font color='red'>Education Can't Be Empty";
			return false;
			
			
		}

	
	else
	{
		
	
	$sql =  "UPDATE users SET fname='$fname', nname='$nname', password='$password', email='$email', gender='$gender', education='$education' WHERE id='$id' ";
   $data = mysqli_query($con,$sql);
if($data>0)
{
	echo "<font color='green'>Updated Successfully. ";
}
else
{
	echo "<font color='red'>Not Updated. ";
}
	
}
}
else
{
	echo "<font color='blue'>Click on Update Button to Save Changes";
}

?>

</fieldset>
</body>
</html>





