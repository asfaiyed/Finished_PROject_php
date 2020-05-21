<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student information</title>
</head>
<body>
<table width="100%" height="80px" bgcolor="#32fek09">
		<tr><td>
		
		<fieldset>
		<legend><h1>Student information</h1></legend>
		<div align="center"><a href="addstudent.php">Add student</a></div><br><br><br>
		<div align="left"><a href="enquerystudent.php">Enquery student</a></div><br><br><br>
		<div align="right"><a href="deletestudent.php">Delete student</a></div><br><br><br>
		<div align="center"><a href="showstudent.php">Show all student</a></div><br><br><br>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div><br><br><br>

 
		</fieldset>
		</td>
		</tr>
		
		</table>
		</body>
		</html>