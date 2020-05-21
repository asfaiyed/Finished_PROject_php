<?php


	function tp()
		{
			
			global $new;
			$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$subject=$_POST['subject'];
			$time=$_POST['time'];
			$sql = "select * from s_tp_req where nname='$new';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			if($count>3)
				{
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>Limit id to send maximum 3 request</b></span></table></td> 
					</tr>
					<?php
				}
			else
				{				
						$sql = "insert into s_tp_req (nname,subject,time) values ('$new','$subject','$time')";
						$result = mysqli_query($con, $sql);
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>Requst send </b></span></table></td> 
					</tr>
					<?php
				}
	
		}





?>