<?php
function rating()
	{
		global $new;
			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$tutor=$_POST['key'];
			$rating=$_POST['rating'];
			$review=$_POST['review'];
			$sql = "select * from ratings where teacher_name='$tutor' AND name='$new';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			if($tutor=="" || $rating=="" || $review=="")
				{
					?>
					<table align='center'>
					<tr>
					
					<td><span style='color:#F4FF09' align='center'><b>you have to fill up the fields </b></span></table></td> 
					</tr>
					<?php
				}
			else if($count>0)
				{
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>already you give your rating </b></span></table></td> 
					</tr>
					<?php
				}
			else
				{				
						$sql = "insert into ratings (teacher_name,name,review,ratings) values ('$tutor','$new','$review','$rating')";
						$result = mysqli_query($con, $sql);
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>thank you for giving your opinion </b></span></table></td> 
					</tr>
					<?php
				}
	}




?>