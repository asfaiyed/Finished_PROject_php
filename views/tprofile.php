<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	$userprofile = $_SESSION['nname'];

$sql = "select * from users where nname='$userprofile'";
$result = mysqli_query($con,$sql);
$count = mysqli_fetch_assoc($result);
	
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>
<fieldset>
		<legend><h1>PROFILE</h1></legend>
		
		<table border='1'>
		<tr>
		<td colspan="9">
		<center><img src='<?php echo $count['picsource']; ?>' height='180' width='150' /></center>
		</td>
		
		</tr>
		<tr>
		<th>id</th>
		<th>fullname</th>
		<th>username</th>
		<th>password</th>
		<th>email</th>
		<th>type</th>
		<th>gender</th>
		<th>education</th>
		<th>operation</th>
		</tr>
		<?php
		
	
	if($count !=0)
	{
		
		
		
		
		
			echo "<td>".$count['id']."</td>
			<td>".$count['fname']."</td>
		<td>".$count['nname']."</td>
		<td>".$count['password']."</td>
		<td>".$count['email']."</td>
		<td>".$count['type']."</td>
		<td>".$count['gender']."</td>
		<td>".$count['education']."</td>
	<td>"."<a href='../views/tpupdate.php?id=$count[id]&fname=$count[fname]&nname=$count[nname]&password=$count[password]&email=$count[email]&type=$count[type]&gender=$count[gender]&education=$count[education]'>Edit</a>"."</td>

		</tr>";
		
			
		
		
		
	}
	else
	{
		
		
		echo "No Records Found";
		
		
		
	}
		?>
		
		
		
		
		
		



		

		
</table><br/>
<a href="../views/thome.php">Go To Home Page</a>
		

</body>
</html>





	