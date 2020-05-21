<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tution provider information</title>
</head>
<body>
<table width="100%" height="80px" bgcolor="#32fek09">
		<tr><td>
<fieldset>
		<legend><h1>Tution provider information</h1></legend>
		<div align="center"><a href="addtutionprovider.php">Add tution provider</a></div><br><br><br>
		<div align="left"><a href="enquerytutionprovider.php">Enquery tution provider</a></div><br><br><br>
		<div align="right"><a href="deletetutionprovider.php">Delete tution provider</a></div><br><br><br>
		<div align="center"><a href="showtutionprovider.php">Show all tution provider</a></div><br><br><br>
		
		
			
		 <div align="left"><a href="homepageA.php">Back</a></div>

 
		</fieldset>
		</td>
		</tr>
		
		</table>
		</body>
		</html>