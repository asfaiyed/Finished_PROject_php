<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deactivate student</title>
	<script type="text/javascript">
					
					function Validation()
							{
								var name=document.forms["deleteMyself"]["nname"];
								
								var name_error=document.getElementById("nname");
							
								if(name.value == "" )
									{
										//alert('required to fill up all the fields');
										name.style.border="1px sloid #5555";
										name_error.textContent="Please give a name";
										name.focus();
										return false;
									}
								
							}
							
		</script>
</head>
<body>
<fieldset>
		<legend><h1>Deactivate student</h1></legend>
		<form action="../php/deleteMyselfcheck.php" enctype="multipart/form-data"" method="post"  name="deleteMyself" onsubmit="return Validation()">
		
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF15789>
									<tr>
									<td> <center>Give your nickname : </td>
									</tr>
									<tr>
									<td> <center><input type="text" name="nname" placeholder="Nick  name"/> <div id="nname" class="val" > </div> </td>
									</tr>
									<tr>
									<td> <center><input type="submit" name="deleteMyself" value="Deactivate your account !!"/> </td>
									</tr>
									<tr>
									<td> <a href='../views/myprofile.php'>Back</a></td>
									</tr>
									</table>
									
		
		
			</form>
		 

 
		</fieldset>
		
		
		</body>
		</html>
		
		
		
		