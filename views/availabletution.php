<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>

		<html>
			<head>
				<title><b>Show all tuitions</b></title>
			</head>
			<body>
				<form action="../php/showtutioncheck.php" enctype="multipart/form-data"" method="post"   >
					<table>
					<tr></tr>
					<tr></tr>
					<tr>
						<td><center><b>Click on "Show tuitions" to find all the tuitions </b></td>
						<td><center><input type="submit" name="showtution" value="Show tuitions"/></td>
					</tr>
					<tr>
						<td><div align="left"><a href="homepageA.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					</table>
					
				</form>
				
					
		</body>
		