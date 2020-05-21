<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>

		<html>
			<head>
				<title><b>Show all tuition providers</b></title>
			</head>
			<body>
				<form action="../php/showTuitionprovidercheck.php" enctype="multipart/form-data"" method="post"   >
					<table width="100%" height="200px" bgcolor="#43c1d0">
					<tr></tr>
					<tr></tr>
					<tr>
						<td width="85%" align="center" bgcolor="#f1ecec"><center><b>Click on "Show tuition-provider" to show all providers</b></td>
						<td><center><input type="submit" name="showtp" value="Show tuition-provider !"/></td>
					</tr>
					<tr>
						<td><div align="left"><a href="tutionproviderinformation.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					</table>
					
				</form>
				
					
		</body>
		