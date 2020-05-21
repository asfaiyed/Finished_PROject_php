<?php


	function upload()
		{	
			global $new;
			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$subject=$_POST['subject'];
			$time=$_POST['time'];
			
			$filename = $_FILES["file"]["name"];
			$tempname = $_FILES["file"]["tmp_name"];
			$folder = "../views/upload/".$filename;
			move_uploaded_file($tempname,$folder);
	
			
			
			$sql = "select * from s_notes where notes='$folder' AND nname='$new';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			if($count>0)
				{
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>already uploaded </b></span></table></td> 
					</tr>
					<?php
				}
			else
				{				
						$sql = "insert into s_notes (nname,subject,date,notes) values ('$new','$subject','$time','$folder')";
						$result = mysqli_query($con, $sql);
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>Notes Uploaded </b></span></table></td> 
					</tr>
					<?php
				}
			
		}




?>