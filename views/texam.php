<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
</head>
<body>
<fieldset>
		<legend><h1>EXAM & GRADES</h1></legend>
		<a href="../views/tmexam.php">Take Exam</a>
		<a href="../views/tgrades.php">Upload Grades</a><br/><br/>
		 <a href ='../views/thome.php'>Go To Home Page</a>		
		</fieldset>
		</body>
		</html>