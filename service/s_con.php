<?php



		function student_text()	
			{
				
				
				global $new;
				$reciever=$_POST['key'];
				$text=$_POST['text'];
				
		
				$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
						$sql = "insert into student_stext (sender,s_text,reciever) values ('$new','$text','$reciever')";
						$result = mysqli_query($con, $sql);
						?>
					<table align='center'>
					<tr>
					<td><span style='color:#F4FF09' align='center'><b>text send </b></span></table></td> 
					</tr>
					<?php
			}

?>