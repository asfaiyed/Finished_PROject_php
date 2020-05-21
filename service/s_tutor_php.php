<?php
function tutor()	
{	$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$sql = "select * from s_tutor where student='{$_SESSION['nname']}'";
	
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);
	

	
	if($count){

		$data = "<table border='5' BORDERCOLOR=#FC8C41 align='center'>
									<tr>
										<td><span style='color:#FC8C41 '><b>SUBJECT</b></span></td>
										
										<td><span style='color:#FC8C41 '><b>Tutor Name</b></span></td>
										<td><span style='color:#FC8C41 '><b>Select</b></span></td>
										<td><span style='color:#FC8C41 '><b>Delete it</b></span></td>
										</tr>
									";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<form action='../php/s_tutor_delete.php' method='post' role='form'>
					<td><span style='color:#2BD790 '>{$row['subject']}</span></td>
					<td><span style='color:#2BD790 '>{$row['tutor']}</span></td>
					<td>
						<input type='checkbox' name='keyToDelete' value='{$row['id']}' required>
					</td>
					<td>
						<input type='submit' name='submit' value='delete' style='color:#FF4500 ' >
					</td>
					</form>					
					</tr>";
		}

		$data .= "</table>";
		echo $data;

		
	}
}
	
	?>