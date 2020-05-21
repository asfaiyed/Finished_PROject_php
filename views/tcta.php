<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
		
	
?>	
<!DOCTYPE html>
<html>
<head>
	<title>COMPLAIN</title>
</head>
<body>
<fieldset>
	<h1 id="abc">Type Here to Complain</h1>

	<form>
		<input type="text" id="name" name="name"><br/><br/>
	
	
		<input type="button" name="submit" value="Submit" onclick="ajax()">
	<a href="../views/tctacheck.php">View Posted Complain</a><br/><br/><a href="../views/thome.php">  Go To Home Page</a>

	</form>

	<script type="text/javascript">
		
		function ajax(){
			var name = document.getElementById("name").value;

if(name==""){
	alert("Textbox Can't Be Empty");
return false;

}
			var xhttp = new XMLHttpRequest();	
			xhttp.onreadystatechange = function() {

			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById("abc").innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("POST", "../php/tabc.php", true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
		xhttp.send("name="+name); 
			
		
		}

		
	</script>
	</fieldset>
</body>
</html>