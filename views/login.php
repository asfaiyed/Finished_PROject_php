<?php
	
	$fonts= "verdana";
	$Global['flag']=1;
	session_start();
	if(isset($_SESSION['nname'])){  
		header("location: Home.php");
	}
	
?>

<html>
<head>
		<title>PHP SYNTEX</title>
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
	<h2> Welcome to Our Site </h2>
</section>
<section class="main">
		
		<html>
			<head>
				<title><b>Log IN</b></title>
			</head>
			<form action="../php/log_check.php" method="post" onsubmit="return validation_js()" name="vform">
				<body>
					<h3>UserName</h3>
					<input type="text" name="nname" value="" />
					<div id="nname" class="val"></div>
					<h3>User Type</h3>
					<input type="radio" name="type" value="admin" required/>Admin
						<input type="radio" name="type" value="tp" />Tution Provider
						<input type="radio" name="type" value="teacher" />Teacher
						<input type="radio" name="type" value="student" />Student
						<div id="type" class="val"></div>
					<h3>Password</h3>
					<input type="password" name="password" value=""  />
					<div id="password" class="val"></div>
					<br /><br />
					<input type="submit" name="submit" value="submit" />
					<a href="registration.php">GO to Registration</a>
					
					
				</body>
			</form>
		</html>
		
	


<script type="text/javascript">
								
								
								var nname=document.forms["vform"]["nname"];
								var type=document.forms["vform"]["type"];
								var password=document.forms["vform"]["password"];
								
								
								
								
								
								var nname_error=document.getElementById("nname");
								var type_error=document.getElementById("type");
								var password_error=document.getElementById("password");
								
								
								
								nname.addEventListener("blur",nnameVarify,true);
								type.addEventListener("blur",typeVarify,true);
								password.addEventListener("blur",passwordVarify,true);
								
								
								
								function validation_js()
							{
							
								
								if(nname.value == "" )
									{
										//alert('required to fill up all the fields');
										nname.style.border="1px sloid #5555";
										nname_error.textContent="name is required";
										nname.focus();
										return false;
									}
								
								
								if(type.value == "")
									{
										type_error.textContent="email is required";
										type.focus();
										return false;
									}	
								
								if(password.value == "")
									{
											//alert('required to fill up all the fields');
											password.style.border="1px solid red";
											password_error.textContent="password is required for checking";
											password.focus();
											
											return false;
									}	
									
								i			
							
							}
							
					function nnameVarify()
						{
							if(nname.value !== "" )
									{
										nname.style.border="1px solid #5E6E66";
										nname_error.textContent="";
										return true;
										
									}
							
						}
							
					
					function typeVarify()
						{
							if(type.value !== "" )
									{
										type.style.border="1px solid #5E6E66";
										type_error.inneHTML="";
										return true;
									}
							
						}
						function passwordVarify()
						{
							if(password.value !== "" )
									{
										password.style.border="1px solid #5E6E66";
										password_error.textContent="";
										return true;
									}
							
						}
					
										
						
							
</script>

		
		
		

	
		

</section>	
<section class="footer">
	<h2><?php echo $_SERVER['PHP_SELF'] ; ?></h2>
</section>
</div>
</body>
</html>
