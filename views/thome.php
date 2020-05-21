<?php	
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
<fieldset>
<div class="header">
	
		<marquee bgcolor="#446"><h1><font color="white">WELCOME HOME <?= $_SESSION['nname']?></font></h1><br/></marquee>
		
		</div>

        <br/><div align="center"><a href="../views/tprofile.php">Profile</a></div><br/><br/>
        <div align="left"><a href="../views/tavailabletuition.php">Available Tuition</a></div>
		<div align="right"><a href="../views/tofferedtuition.php">Offered Tuition</a></div><br/><br/>
		<div align="left"><a href="../views/tuploadnotes.php">Upload Notes</a></div>
		<div align="center"><a href="../views/tstudentsinfo.php">Student's Information</a></div>
		<div align="right"><a href="../views/texam.php">Exam & Grades</a></div><br/><br/>
		<div align="left"><a href="../views/tnotices.php">Notices</a></div>
		<div align="center"><a href="../views/tsalary.php">Salary</a></div>
		<div align="right"><a href="../views/tschedule.php">Class Schedule</a></div><br/><br/>
		<div align="left"><a href="../views/tctp.php">Contact Tuition Provider</a></div>
		<div align="center"><a href="../views/tcta.php">Complain to Admin</a></div>
		<div align="right"><a href="../views/tratings.php">Ratings & Review</a></div><br/><br/>
		<div align="center"><a href="../php/tlogout.php">Logout</a></div><br/><br/>
 
		</fieldset>
	
</body>
</html>
