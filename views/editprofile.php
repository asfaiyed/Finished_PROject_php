<?php	
	session_start();
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
		
	
?>
<!DOCTYPE html>

		<html>
			<head>
				<title><b>Edit information</b></title>
			</head>
			<body>
				<form action="../php/editmyprofileCheck.php" enctype="multipart/form-data"" method="post"   >
					<table>
					
					<tr>
						<td><b>Full NAME</b></td>
						<td><input type="text" name="fname" value=""/></td>
						<td> <input type="submit" name="fullname" value="Change full name"/></td>
					</tr>
					
					
					<td><b>Nick NAME</b></td>
					<td><input type="text" name="nname" value="" /></td>
					<td> <input type="submit" name="nickname" value="Change nick name"/></td>
					</tr>
					<tr>
						
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
					<td><b>Password</b></td>
					<td><input type="password" name="password" value="" /><div id="password" class="val"></div></td>
					<td><input type="submit" name="paassword" value="Change password" /></td>
					</tr>
					<tr>
					<tr></tr>
					<td><b>Email</b></td>
					<td><input type="email" name="email" value=""><div id="email" class="val"></div></td>
					<td><input type="submit" name="e_mail" value="Change email"></td>
					</tr>
					<tr></tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
					<td><b>GENDER</b></td>
					<td><input type="radio" name="gender" value="M" />Male
						<input type="radio" name="gender" value="F" />Female
						<input type="radio" name="gender" value="O" />Other
						<div id="gender" class="val"></div>
					</td>
					<td><input type="submit" name="gen_der" value="Change gender"></td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr></tr>
					<td><b>Profile Picture</b></td>
					<td><input type="file" name="mypic">
					<td><input type="submit" name="picturesubmit" value="Change profile picture"></td>
					</tr>
					<tr></tr>
					<tr>
					<td><b>EDUCATION</b></td>
					<td><input type="radio" name="education" value="ssc" >S.S.C.
						<input type="radio" name="education" value="hsc" />H.S.C
						<input type="radio" name="education" value="bsc" />B.SC.
						<div id="education" class="val"></div>
					</td>
					<td><input type="submit" name="edu_cation" value="Change education"></td>
					</tr>
					
					
					<tr>
						<td> </td>
						<td> </td>
					</tr>
					<tr>
						<td><div align="left"><a href="myprofile.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					</table>
					
				</form>
				
					
		</body>
		
		
		

