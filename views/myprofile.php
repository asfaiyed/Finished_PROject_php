<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
</head>
<body>
<table width="100%" height="80px" bgcolor="#32fek09">
		<tr><td>
		
<fieldset>
		<legend><h1>My PROFILE</h1></legend>
		<div align="center"><a href="showprofile.php">Show your information</a></div><br><br><br>
		<div align="left"><a href="editprofile.php">Edit you information</a></div><br><br><br>
		<div align="right"><a href="deactivateprofile.php">Deactivate</a></div><br><br><br>
		
		
		
		
			
		 <div align="center"><a href="homepageA.php">Back</a></div><br><br><br>

 
		</fieldset>
		</td>
		</tr>
		
		</table>
		</body>
		</html>