<?php	
	session_start();
	
	include('../service/functions.php');
	
	 if(!isset($_COOKIE['username'])){  
		header("location: loginA.php");
	}
	
	if(isset($_POST['reply'])){
		$id=$_POST['Id'];
		$reply = $_POST['Reply'];
		if(($reply !=="") AND ($id!=="")){
			
			$realid=validateTpid($id);
			if($row = mysqli_fetch_assoc($realid)){
			$postreply=uploadTpReply($id,$reply);
			
			if($postreply){echo "Your reply has been recorded !";}else{"Error!";}
			}else{echo "Invalid id ";}
			
		}else{echo "No fields can be empty";}
	}
	
	
	echo "<table >
			<tr>
				<td><a href='../views/enquerytutionprovider.php'>Back</a></td>
			</tr>";

	echo "</table>";
	
	
?>
	
