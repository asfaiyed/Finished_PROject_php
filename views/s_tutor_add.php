<?php

	$fonts= "verdana";
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: login.php");
	}
	$new=$_SESSION['nname'];
	include('../service/s_add_php.php');
?>

<html>
<head>
		<title>Add tutor</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px; background:#444; }
		.header h2,.footer h2 {margin:0 auto; text-align:center;}
		</style>
</head>
<body>
<div class="phpcoding">
<section class="header">
	<h2> <?php echo "<b>Send Requests for TUTOR</b>" ;?> </h2>
</section>
<section class="main">
			</br></br></br>
			
	
<?php
	if(isset($_POST['submit']))
	{		
		
		add();
			
	}
	
?>


	
			
			
			<?php
	
	$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$sql = "select * from users where type='teacher'";
	
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);
	

	
	if($count){

		$data = "<table border='5' BORDERCOLOR=#FC8C41 align='center'>
									<tr>
										<td><span style='color:#FC8C41 '><b>Tutor Name</b></span></td>
										
										<td><span style='color:#FC8C41 '><b>SUBJECT</b></span></td>
										<td><span style='color:#FC8C41 '><b>Requsted time</b></span></td>
										<td><span style='color:#FC8C41 '><b>Select</b></span></td>
										<td><span style='color:#FC8C41 '><b>SEND REQ</b></span></td>
										</tr>
									";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<form action='' method='post' role='form' role='form' onsubmit='return validation_js()' name='vform'>
					<td><span style='color:#2BD790 '>{$row['nname']}</span></td>
					<td>
						<input type='text' name='subject' value='' >
						<div id='subject' class='val'></div>
					</td>
					<td>
						<input type='text' name='time' value='' >
						<div id='time' class='val'></div>
					</td>
					<td>
						<input type='checkbox' name='key' value='{$row['nname']}' required>
					</td>
					<td>
						<input type='submit' name='submit' value='send' style='color:#FF4500 ' >
					</td>
					</form>					
					</tr>";
		}

		$data .= "</table>";
		echo $data;

		
	}
?>








			
			
			</br></br>
			<table>
			<tr>
			<td><a href="s_tutor.php"><span style=color:#F4FF09><b>BACK</b></span></a></td>
			
			</table>
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		




		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</section>
	
<section class="footer">
	<h2><?php echo $_SERVER['PHP_SELF'] ; ?> </h2>
</section>
</div>
</body>

</html>
