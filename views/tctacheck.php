<?php
session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		require("../service/tconnection.php");
	$userprofile = $_SESSION['nname'];
       $sql = "SELECT *FROM cta where name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>SALARY</title>
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
		<h1>COMPLAIN</h1>
			
			
				<table border='1'>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>complain</th>
		<th>operation</th>
		<th>reply</th>
		</tr>
		
		<?php
		
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['complain']."</td>
		
		<td>"."<a href='../php/tctadelete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a>"."</td>
		<td>".$result['reply']."</td>
		</tr>";
		
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
		?>
		
		
		
		
		</table><br/>
		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	<a href ='../views/tcta.php'>Go To Complain Page</a><br/>	<br/>			
	<a href ='../views/thome.php'>Go To Home Page</a>		
			
		

<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data?');



	
}




</script> 
		</fieldset>
		</body>
		</html>

	
	
		

	