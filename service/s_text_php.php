<?php

function text()
	{
		
			global $new;
			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$key=$_POST['keyToDelete'];
			$text=$_POST['text'];
			
			$sql = "select * from rnotices where name='$new' and notice='$text' and teacher_name='$key';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			
			
			
			if($count)
				{
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>text already send </b></span></table></td> 
					</tr>
					<?php
				}
			else
				{
					
					$sql="INSERT INTO rnotices (name,notice,teacher_name) values ('$new','$text','$key')";		
					$result = mysqli_query($con, $sql);
					
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>text send </b></span></table></td> 
					</tr>
					<?php
				}
				
	}




?>