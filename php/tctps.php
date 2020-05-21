<?php
	
session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");	
	$search = $_GET['key'];

	
	$sql = "select * from users where nname like '%{$search}%' && type='tp'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "<table border=1>
				<tr>
					<td>id</td>
					<td>name</td>
					
					<td>email</td>
				
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['id']}</td>
					<td>{$row['nname']}</td>
				
					<td>{$row['email']}</td>
					
			</tr><br/>";
			
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
?>