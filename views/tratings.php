<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	$userprofile = $_SESSION['nname'];	
	$sql = "SELECT *FROM ratings where teacher_name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>RATINGS & REVIEW</title>
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
		<legend><h1>RATINGS & REVIEW</h1></legend>
			
			
				<table>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>review</th>
		<th>ratings</th>
		
		</tr>
		
		<?php
		
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['review']."</td>
		<td>".$result['ratings']."</td>
		</tr>";
		
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
		?>
		
		
		
		
		</table><br/>
		
		<?php 
		$userprofile = $_SESSION['nname'];
			$query = "SELECT avg(ratings) AS avg FROM ratings where teacher_name='$userprofile'";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			
			$output = " Average Ratings:"." ".$row['avg'];
			 echo $output; 
		}
		
			
			
	
		
	
		
		
		?>
		
		
		
		
		<br/>
		<br/>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	<a href ='../views/thome.php'>Go To Home Page</a>		
			
		


		</fieldset>
		</body>
		</html>