<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>

		<html>
			<head>
				<title><b>Enquery teacher</b></title>
			</head>
			<body>
				<form action="../php/enqueryTeachercheck.php" enctype="multipart/form-data"" method="post"   >
					<table width="100%" height="200px" bgcolor="#43c1d0">
					<tr></tr>
					<tr></tr>
					<tr>
						<td width="85%" align="center" bgcolor="#f1ecec"><center><b>Click on "show complain" to find all the complains from teacher</b></td>
						<td><center><input type="submit" name="showcomplain" value="showcomplain"/></td>
					</tr>
					<tr>
						<td><div align="left"><a href="teacherinformation.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					</table>
					
				</form>
				
					
		</body>
		