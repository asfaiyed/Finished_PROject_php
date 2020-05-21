<?php	
	session_start();
	
	include('../service/functions.php');
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
	$nname=($_COOKIE['username']);
		
   

	$user = showmyProfile($nname);
	

	
	echo "<fieldset>";
	echo "<legend><h1>Your information</h1></legend>";
	
	echo "<table border=1>
			<tr>
				<td>Profile Picture </td>
				<td>Full Name</td>
				<td>Nick Name</td>
				<td>Password</td>
				<td>Email</td>
				<td>Type</td>
				
				<td>Gender</td>
				<td>Education</td>
				
			</tr>";

	while($row = mysqli_fetch_assoc($user)){
		//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
		echo "<tr>
				<td> <img src='{$row['picsource']}' hight='100px' width='100px'></td>
				<td>{$row['fname']}</td>
				<td>{$row['nname']}</td>
				<td>{$row['password']}</td>
				<td>{$row['email']}</td>
				<td>{$row['type']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['education']}</td>
			
			
		    </tr>";
	}

	echo "</table>";
	echo "<a href='myprofile.php'>Back</a>";	
		    
	
	echo "</fieldset>";
	
?>
	
