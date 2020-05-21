<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deactivate teacher</title>
	<script type="text/javascript">
					
					function Validation()
							{
								var name=document.forms["deleteTeacher"]["nname"];
								
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
		<legend><h1>Deactivate teacher</h1></legend>
		<form action="../php/deleteTeachercheck.php" enctype="multipart/form-data"" method="post"  name="deleteTeacher" onsubmit="return Validation()">
		
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF15789>
									<tr>
									<td> <center>Choose nickname of the teacher you want to delete : </td>
									</tr>
									<tr>
									<td> <center><input type="text" name="nname" placeholder="Teacher name"/> <div id="nname" class="val" > </div> </td>
									</tr>
									<tr>
									<td> <center><input type="submit" name="deleteTeacher" value="Delete this teacher !!"/> </td>
									</tr>
									<tr>
									<td> <a href='../views/teacherinformation.php'>Back</a></td>
									</tr>
									
									</table>
									
		
		
			</form>
		 

 
		</fieldset>
		
		
		
		
		</body>
		</html>
		
		
		
		