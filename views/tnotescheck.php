<?php
	session_start();
	require("../service/tconnection.php");
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	$userprofile = $_SESSION['nname'];
	$sql = "SELECT *FROM notes where teacher_name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);
	?>
	
	
	
	<!DOCTYPE html>
<html>
<head>
<title>CHECK NOTES</title>
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
		<h1>CHECK NOTES</h1>
			
			
				<table border='1'>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>file</th>
		<th>date</th>
		</tr>
		<?php
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			?>
			<tr>
			<td><?php echo $result["id"] ?></td>
			<td><?php echo $result["name"] ?></td>
			<td><a href="<?php echo $result["file"] ?>"><?php echo $result["file"] ?></a></td>
		<td><?php echo $result["date"] ?></td>
		
		</tr>
		<?php
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
	
	
?>
	</table><br/>
	
	<a href="../views/tuploadnotes.php">Upload Notes</a>
	<a href="../views/thome.php">Go To Home Page</a>
	
		</fieldset>
		</body>
		</html>