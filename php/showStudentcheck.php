<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['showstudent'])){
		$studentshow=showStudent();
		if($studentshow){
					echo "<fieldset>";
					echo "<legend><h1>All students</h1></legend>";
	
					echo "<table border=1  width='100%' height='80px' bgcolor='#43c1d0'>
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

				while($row = mysqli_fetch_assoc($studentshow)){
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
					
		    
	
				echo "</fieldset>";
				echo "<a href='../views/studentinformation.php'>Back</a>";
				
				
				
		}else{
			echo "error";
			echo "<table>
						<tr>
						<td><div align='left'><a href='studentinformation.php'>Back</a></div> </td>
						<td> </td>
					</tr>
					</table>";
		}
		
		}
		
?>