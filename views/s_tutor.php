<?php

	$fonts= "verdana";
	session_start();
	if(!isset($_SESSION['nname'])){  
		header("location: login.php");
	}
	include('../service/s_tutor_php.php');
?>

<html>
<head>
		<title>PHP SYNTEX</title>
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
	<h2> <?php echo "<b>Your TUTOR</b>" ;?> </h2>
</section>
<section class="main">
			</br></br></br>
			
			
			
			
<?php
	
	tutor();
?>
			
			
			</br></br>
			<table>
			<tr>
			<td><a href="shome.php"><span style=color:#F4FF09><b>BACK</b></span></a></td>
			<td></td><td></td><td></td><td></td><td></td><td></td>
			<td><a href="s_tutor_add.php"><span style=color:#F4FF09><b>Add Tutor</b></span></a></td>
			
			
			</tr>
			</table>
			
			
			
			<h1 id="abc"></h1>

	<form>
		<input type="button" name="" value="Check all grades" style='color:#E308D5' onclick="ajax()">
		</form>

	<script type="text/javascript">
		
		function ajax(){
			

			var xhttp = new XMLHttpRequest();	
			xhttp.onreadystatechange = function() {

			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById("abc").innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("POST", "../service/s_grade.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(); 
		}

	
	</script>

			
			
		
</section>
	
<section class="footer">
	<h2><?php echo $_SERVER['PHP_SELF'] ; ?> </h2>
</section>
</div>
</body>

</html>
