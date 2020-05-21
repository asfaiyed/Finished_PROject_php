<?php
	
	$fonts= "verdana";
	$Global['flag']=1;
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: login.php");
	}
	include('../service/s_u_v.js');
	include('../service/function.php');
	$con = getConnection();
	$sql = "select * from users where nname='{$_SESSION['nname']}'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);

?>

<html>
<head>
		<title>Update Profile</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px;text-align:center;}
		.header h2,.footer h2 {margin:0 auto;}
		
		</style>
</head>
<body>
<div class="phpcoding">
<section class="header">
	<h2> Update Your Profile</h2>
</section>
<section class="main">
		
		<html>
			<head>
				<title><b>Log IN</b></title>
			</head>
			<form action="../php/s_update_check.php" enctype="multipart/form-data" method="post" onsubmit="return validation_js()" name="vform">
				<body>
				<h3><span style='color:#FC8C41'><b>**new password should not be less than 5 character or it will remain unchanged**</b></span></h3>
					
					<h3>Profile Picture</h3>
					<input type="file" name="mypic"><div id="mypic" class="val"></div><div id="fname" class="val"></div>
					
					<h3>Full Name</h3>
					<input type="text" name="fname" value="<?php echo $user['fname']; ?>" /><div id="fname" class="val"></div>
					<h3>Email Address</h3>
				<input type="email" name="email" value="<?php echo $user['email']; ?>" ><div id="email" class="val"></div>
					
					<h3>Education</h3>
					<input type="radio" name="education" value="ssc" required/>S.S.C.
						<input type="radio" name="education" value="hsc" />H.S.C
						<input type="radio" name="education" value="bsc" />B.SC.
						<div id="education" class="val"></div>
					<h3>Previous Password</h3>
					<input type="password" name="p_password" value=""  /><div id="p_password" class="val"></div>
					<h3>New Password</h3>
					<input type="password" name="n_password" value=""  /><div id="n_password" class="val"></div>
					
					<br /><br />
					<table align='center'>
					<tr>
					<td><input type="submit" name="submit" value="submit" /></td>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					
					<td><a href="sprofile.php"><span style='color:#FC8C41'><b>back</b></span></a></td>
					
					</tr>
					</table>
					
				</body>
			</form>
		
		
		
		
		
		
		
		
		
		
		<script type="text/javascript">
								
								
								var fname=document.forms["vform"]["fname"];
								var p_password=document.forms["vform"]["p_password"];
								var n_password=document.forms["vform"]["n_password"];
								var email=document.forms["vform"]["email"];
								var education=document.forms["vform"]["education"];
								
								
								
								
								
								var fname_error=document.getElementById("fname");
								var p_password_error=document.getElementById("p_password");
								var n_password_error=document.getElementById("n_password");
								var education_error=document.getElementById("education");
								var email_error=document.getElementById("email");
								
								
								
								fname.addEventListener("blur",fnameVarify,true);
								p_password.addEventListener("blur",p_passwordVarify,true);
								n_password.addEventListener("blur",n_passwordVarify,true);
								education.addEventListener("blur",educationVarify,true);
								email.addEventListener("blur",emailVarify,true);
								
								
								
								
						validation_js();
							
							
</script>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</html>
</section>	
<section class="footer">
	<h2><?php echo $_SERVER['PHP_SELF'] ; ?></h2>
</section>
</div>
</body>
</html>
