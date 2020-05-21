<?php
	session_start();
	
	if(isset($_SESSION['nname'])){
		session_destroy();
		echo "<script>location.href='../views/login.php'</script>";
	}
	else{
		
		echo "<script>location.href='../views/login.php'</script>";
	}
	
	

?>