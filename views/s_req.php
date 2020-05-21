<?php

	$fonts= "verdana";
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: login.php");
	}
	$new=$_SESSION['nname'];
	include('../service/s_req_php.php');
?>

<html>
<head>
		<title>s_ssc</title>
		<style>
		body{font-family:$fonts;}
		.phpcoding{width:1500px ;margin: 10; background:#ddd;}
		.header,.footer {background:#444;color:#FC8C41 ;text-align:center;padding: 10px;}
		.main{min-height:580px; background:#444; }
		.header h2,.footer h2 {margin:0 auto;}
		</style>
</head>
<body>
<div class="phpcoding">
<section class="header">
	<h2> Pending request of the teachers </h2>
</section>
<section class="main">
		
		
		
<?php
		
	req();	
		
?>
		
		
		
		
		
		
		
		
		
		</br></br>
					<a href="shome.php"><span style='color:#F4FF09'><b>back</b></span></a>
</section>
	
<section class="footer">
	<h2> <?php echo $_SERVER['PHP_SELF'] ; ?> </h2>
</section>
</div>
</body>

</html>
