<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
		$userprofile = $_SESSION['nname'];	
	$sql = "SELECT *FROM salary where teacher_name='$userprofile'";
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
		<legend><h1>SALARY</h1></legend>
			
			
				<table border='1'>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>salary</th>
		<th colspan="2">operations</th>
		
		</tr>
		
		<?php
		
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['salary']."</td>
		<td>"."<a href='../views/tsupdate.php?id=$result[id]&name=$result[name]&salary=$result[salary]'>Edit</a>"."</td>
		<td>"."<a href='../php/tsdelete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a>"."</td>
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
		
			$query = "SELECT SUM(salary) AS sum FROM salary where teacher_name='$userprofile'";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$output = " Total Salary:"." ".$row['sum'];
			 echo $output; 
		}
		
			
			
	
		
	
		
		
		?>
		
		
		
		
		<br/>
		<br/>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	<a href ='../views/tinsertsalary.php'>Insert</a>				
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