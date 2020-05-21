<?php

$flag=0;
function add()
	{
		global $flag;
		global $new;
			$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$tutor=$_POST['key'];
			$subject=$_POST['subject'];
			$time=$_POST['time'];
			
			$sql = "select * from s_tutor where tutor='$tutor';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			
			
			if($count>0)
				{
					global $flag;
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>already he is your tutor </b></span></table></td> 
					</tr>
					<?php
					$flag++;
				}
			else if($tutor=="" || $subject=="" || $time=="")
				{	global $flag;
					
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>fill up the fields </b></span></table></td> 
					</tr>
					<?php
					$flag++;
				}
			$sql = "select * from s_req where tutor='$tutor' AND student='$new';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			
			if($count>0 && $flag==0)
				{
					global $flag;
					
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>already send </b></span></table></td> 
					</tr>
					<?php
					$flag++;
				}
			if($flag==0)
				{				
						$sql = "insert into s_req (tutor,student,subject,time) values ('$tutor','john','$subject','$time')";
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