<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notices</title>
</head>
<body>
<fieldset>
		<legend><h1>NOTICES</h1></legend>
			<a href="../views/trnotices.php">Read Notices</a>
		   <a href="../views/tpnotices.php">Post Notices</a><br/><br/>
		 <a href ='../views/thome.php'>Go To Home Page</a><br/><br/>


		</fieldset>
		</body>
		</html>