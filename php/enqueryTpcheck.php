<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['showcomplain'])){
		$tpcomplain=showTpComplain();
		if($tpcomplain){
					echo "<fieldset>";
					echo "<legend><h1>All Complains</h1></legend>";
	
					echo "<table border=1 width='100%' height='80px' bgcolor='#43c1d0'>
					<tr>
					<td>id </td>
					<td>name</td>
					<td>complain</td>
					<td>reply</td>
					</tr>";

				while($row = mysqli_fetch_assoc($tpcomplain)){
					//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
					echo "<tr>
					
					<td>{$row['Id']}</td>
					<td>{$row['nname']}</td>
					<td>{$row['complain']}</td>
					<td>{$row['reply']}</td>
					</tr>";
				}

				echo "</table>";
					
		    
	
				echo "</fieldset>";
				
				
				
		}else{
			echo "error";
		}
		
		}
		
?>	
	<html>
			<head>
			</head>
			<body>
				<form action="../php/giveTpReply.php"   method="post" onsubmit="return Validation()" name="tpcomplainForm"  >
					<table bgcolor="#43c250">
					
					<tr>
					<td bgcolor="#f1ecec"><center><b>Reply to student</td>
					</tr>
					<tr>
						<td><b> ID: </b></td>
						<td><input type="text" name="Id" value="" placeholder="Complain id"/><div id="Id" class="val"></div></td>
					</tr>
					<tr>
						<td><b>Reply: </b></td>
						<td><input type="text" name="Reply" value="" placeholder="Write messaage"/><div id="Reply" class="val"></td>
					</tr>
						<td><input type="submit" name="reply" value="Done!"/></td>
					</tr>
					<tr>
					<tr>
						<td><div align="left"><a href="../views/enquerytutionprovider.php">Back</a></div> </td>
						<td> </td>
					</tr>
					
					
				</form>	
	
				
				
				
				<script type="text/javascript">
								
								
								
								var id=document.forms["tpcomplainForm"]["Id"];
								var Reply=document.forms["tpcomplainForm"]["Reply"];
								var id_error=document.getElementById("Id");
								var Reply_error=document.getElementById("Reply");
					function Validation()
							{
							
								if(id.value == "" )
									{
										//alert('required to fill up all the fields');
										id.style.border="1px sloid #5555";
										id_error.textContent="Please give an id";
										id.focus();
										return false;
									}
								
									
								
								if(Reply.value == "" )
									{
										//alert('required to fill up all the fields');
										Reply.style.border="1px solid red";
										Reply_error.textContent="Must give a reply !";
										Reply.focus();
										return false;
									}
						
						
								
							}
							
					</script>
				
				</body>
				
	</html>	
		
		
		
	
	
