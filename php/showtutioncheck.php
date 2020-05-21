<?php
session_start();
include('../service/functions.php');

	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
      

	if(isset($_POST['showtution'])){
		$tutionshow=showTution();
		if($tutionshow){
					echo "<fieldset>";
					echo "<legend><h1>All tution information</h1></legend>";
	
					echo "<table border=1>
					<tr>
				<td>Teacher </td>
				<td>Student</td>
				<td>Class</td>
				<td>Subject</td>
				<td>Area</td>
				
				
				
					</tr>";

				while($row = mysqli_fetch_assoc($tutionshow)){
					//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
					echo "<tr>
					
				<td> </td>
				<td>{$row['Tutor_Name']}</td>
				<td>{$row['Student_Name']}</td>
				<td>{$row['Class_of_Student']}</td>
				<td>{$row['Subjects_To_Provide']}</td>
				<td>{$row['Area_of_Tuition']}</td>
				</tr>";
				}

				echo "</table>";
					
		    
	
				echo "</fieldset>";
				echo "<a href='../views/homepageA.php'>Back</a>";
				
				
				
		}else{
			echo "error";
			echo "<table>
						<tr>
						<td><div align='left'><a href='../views/homepageA.php'>Back</a></div> </td>
						<td> </td>
					</tr>
					</table>";
		}
		
		}
		
?>