<?php
function exam()
	{
			global $new;
			$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
			$ques=$_POST['key'];
			$ans=$_POST['text'];
			$sql = "select * from answer where nname='$new' AND ques='$ques';";
			$result = mysqli_query($con, $sql);
			$count =mysqli_num_rows($result);
			if($count>1)
				{
					?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>already you give your answer 2 times </b></span></table></td> 
					</tr>
					<?php
				}
			else
				{				
						$sql = "insert into answer (nname,ques,ans) values ('$new','$ques','$ans')";
						$result = mysqli_query($con, $sql);
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>thank you for giving your answer </b></span></table></td> 
					</tr>
					<?php
				}
	}







?>