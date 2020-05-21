<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher information</title>
</head>
<body>
<table width="100%" height="80px" bgcolor="#32fek09">
		<tr><td>
		<fieldset>
		<legend><h1>Teacher information</h1></legend>
		<div align="center"><a href="addteacher.php">Add teacher</a></div><br><br><br>
		<div align="left"><a href="enqueryteacher.php">Enquery teacher</a></div><br><br><br>
		<div align="right"><a href="deleteteacher.php">Delete teacher</a></div><br><br><br>
		<div align="center"><a href="showTeacher.php">Show all teacher</a></div><br><br><br>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div><br><br><br>

 
		</fieldset>
		</td>
		</tr>
		
		</table>
		
		
		</body>
		</html>