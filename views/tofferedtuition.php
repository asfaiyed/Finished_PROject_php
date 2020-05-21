<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	$userprofile = $_SESSION['nname'];	
	$sql = "SELECT *FROM offered where teacher_name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>OFFERED TUITION</title>
<style type="text/css">	
	table{
	border-collapse: collapse;
	width: 100%;
	color: #d96459;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	}
	th{
		background-color: #d96459;
		color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2;}
 
</style>
</head>
<body>
<fieldset>
		<legend><h1>OFFERED TUITION</h1></legend>
			
			
				<table border='1'>
		<tr>
		<th>id</th>
		<th>area</th>
		<th>class</th>
		<th>subject</th>
		<th>salary</th>
		<th>tuition_provider</th>
		
		
		</tr>
		
		<?php
		
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['area']."</td>
		<td>".$result['class']."</td>
		<td>".$result['subject']."</td>
		<td>".$result['salary']."</td>
		<td>".$result['tuition_provider']."</td>
		
		</tr>";
		
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
		?>
		
		
		
		
		</table><br/>
		
		

		<br/>	
			
			
				
	<a href ='../views/thome.php'>Back</a>		
			
		


		</fieldset>
		</body>
		</html>