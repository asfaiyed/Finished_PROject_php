<?php	
	session_start();
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deactivate tuition provider</title>
<script type="text/javascript">
					
					function Validation()
							{
								var name=document.forms["deletetp"]["nname"];
								
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

		<legend><h1>Deactivate tuition provider</h1></legend>
		<form action="../php/deleteTuitioprovidercheck.php" enctype="multipart/form-data"" method="post"  onsubmit="return Validation()" name="deletetp" >
		
									</br></br></br></br></br></br>
									<table align='center' border='1' BORDERCOLOR=#FF15789>
									<tr>
									<td> <center> <b>Choose nickname of the provider you want to delete : </b></td>
									</tr>
									<tr>
									<td> <center><input type="text" name="nname" placeholder="Provider name"/> <div id="nname" class="val"></div> </td>
									</tr>
									<tr>
									<td> <center><input type="submit" name="deleteTp" value="Delete this provider !!"/> </td>
									</tr>
									<tr>
									<td> <a href='../views/tutionproviderinformation.php'>Back</a></td>
									</tr>
									</table>
									
		
		
			</form>
		
		
		
		</body>
		</html>
		
		
		
		