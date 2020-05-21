<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	$userprofile = $_SESSION['nname'];		
	$sql = "SELECT *FROM pnotices where teacher_name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>POSTED NOTICES</title>
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
		<h1>POSTED NOTICES</h1>
			
			
				<table border='1'>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>notices</th>
		<th>date</th>
		<th>operation</th>
		
		</tr>
		
		<?php
		
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['notice']."</td>
		<td>".$result['date']."</td>
		
		<td>"."<a href='../php/tpnoticesdelete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a>"."</td>
		</tr>";
		
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
		?>
		
		
		
		
		</table><br/>
		
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	<a href ='../views/tpnotices.php'>Back</a>				
	<a href ='../views/thome.php'>Go To Home Page</a>		
			
		

<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this notice?');



	
}




</script> 
		</fieldset>
		</body>
		</html>