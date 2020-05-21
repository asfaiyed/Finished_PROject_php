<?php
function req()
	{
		global $new;
		$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		$sql = "select * from s_req where student='$new'";
		$result = mysqli_query($con, $sql);
		$count =mysqli_num_rows($result);
		

		
		if($count){

			$data = "</br></br></br>
						<table border='5' BORDERCOLOR=#FC8C41 align='center'>
										<tr>
											<td><span style='color:#FC8C41 '><b>Tutor Name</b></span></td>
											
											<td><span style='color:#FC8C41 '><b>Subject</b></span></td>
											
											<td><span style='color:#FC8C41 '><b>Requested Time</b></span></td>
											</tr>
										";

			while($row = mysqli_fetch_assoc($result)){
				$data .= "<tr>
						<td><span style='color:#2BD790 '>{$row['tutor']}</span></td>
						<td><span style='color:#2BD790 '>{$row['subject']}</span></td>
						<td><span style='color:#2BD790 '>{$row['time']}</span></td>
						</tr>";
			}

			$data .= "</table>";
			echo $data;

		}
	}		
?>	
