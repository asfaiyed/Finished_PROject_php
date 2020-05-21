<?php

function t_notice()
	{
		echo "<table border='5' BORDERCOLOR=#FC8C41 align='center'>
									<tr>
										<td><span style='color:#FC8C41 '><b>Teacher NAME</b></span></td>
										<td><span style='color:#FC8C41 '><b>Notice</b></span></td>
										<td><span style='color:#FC8C41 '><b>DATE</b></span></td>
										</tr>
									";
		global $new;
		$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
		$sql = "select * from pnotices where name='$new'";
		$result = mysqli_query($con, $sql);
		while($row=mysqli_fetch_array($result))
			{
					echo "<tr>
												<td><span style='color:#2BD790 '>".$row['teacher_name']."</span></td>
												<td><span style='color:#2BD790 '>".$row['notice']."</span></td>
												<td><span style='color:#2BD790 '>".$row['date']."</span></td>
												
												</tr>";
			}
	}
?>