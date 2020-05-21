<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONTACT TUITION PROVIDER</title>
</head>
<body>
<fieldset>
	<h1 id="abc">CONTACT</h1>

	<form >
		<input type="text" id="term" name="term" onkeyup="abc()"><a href="../views/thome.php">  Go To Home Page</a>
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "../php/tctps.php?key="+search, true);
			xhttp.send(); 
		}
	

</script> 
		</fieldset>
		</body>
		</html>