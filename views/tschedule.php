<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
		$userprofile = $_SESSION['nname'];
	$sql = "SELECT *FROM schedule where teacher_name='$userprofile'";
	$data = mysqli_query($con, $sql);
	$total = mysqli_num_rows($data);

	
	
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>SCHEDULE</title>
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
		<legend><h1>SCHEDULE</h1></legend>
		No. of Students: <?php echo mysqli_num_rows($data); ?><br/><br/>
		<table border='1'>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>day</th>
		<th>time</th>
		<th colspan="2">operations</th>
		</tr>
		
<script>
function goBack() {
  window.history.back();
}
</script> 
		</fieldset>
		
	<?php	
	
	if($total !=0)
	{
		
		
		
		
		
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['day']."</td>
		<td>".$result['time']."</td>
		<td>"."<a href='../views/tscheduleupdate.php?id=$result[id]&name=$result[name]&day=$result[day]&time=$result[time]'>Edit</a>"."</td>
		<td>"."<a href='../php/tscheduledelete.php?id=$result[id]' onclick='return checkdelete()'>Delete</a>"."</td>
		</tr>";
		
			
		}
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
	
	
	
	
	
	
?>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data?');



	
}




</script> 
		
</table><br/>
<a href="../views/tinsertschedule.php">Insert</a>
		<a href ='../views/thome.php'>Go To Home Page</a><br/><br/>

</body>
</html>





