<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>

		<html>
			<head>
				<title><b>Show all students</b></title>
			</head>
			<body>
				<form action="../php/showStudentcheck.php" enctype="multipart/form-data"" method="post"   >
					<table width="100%" height="200px" bgcolor="#43c1d0">
					<tr></tr>
					<tr></tr>
					<tr>
						<td width="85%" align="center" bgcolor="#f1ecec"><center><b>Click on "Show students" to find all the registered students</b></td>
						<td><center><input type="submit" name="showstudent" value="Show students"/></td>
					</tr>
					<tr>
						<td><div align="left"><a href="studentinformation.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					</table>
					
				</form>
				
					
		</body>
		