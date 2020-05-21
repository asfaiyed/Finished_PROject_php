<?php	
	session_start();
	
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>GRADES</title>
	
<script type="text/javascript">
function validate()
{var id = document.forms["logform"]["id"].value;
if(id==""){
	alert("Id Can't Be Empty");
return false;

}


	var name = document.forms["logform"]["uname"].value;
if(name==""){
	alert("Name Can't Be Empty");
return false;

}

if(name.length<3){
	alert("Name Can;t Be Less Than 3 Letters");
return false;

}




var date = document.forms["logform"]["date"].value;

if(date==""){
	alert("Date Can't Be Empty");
return false;

}	
	
}
</script>
</head>
<body>
<fieldset>
<h1>UPLOAD GRADES</h1>
	<form name="logform" onsubmit="return validate()" action="" method="POST">

	Id<br/>
		<input type="text" name="id" value=""/><br/>
		
	
	
		Name<br/>
		<input type="text" name="uname" value=""><br/>
		
	
		
		
		
		Grade<br/>
		<select name="grade">
					<option value="A+">A+</option>
					<option value="A">A</option>
				
					<option value="B+">B+</option>
					<option value="B">B</option>
					
					<option value="C+">C+</option>
					<option value="C">C</option>
					
					<option value="D+">D+</option>
					<option value="D">D</option>
					
					<option value="F">F</option>
				</select><br/>
			Date<br/>
		<input type="date" name="date" value=""/><br/><br/>
	
		
		<input type="submit" name="submit" value="Submit"> 
		<a href ='../views/tgradescheck.php'>Check Grades Here</a><br/><br/>
		<a href ='../views/texam.php'>Back</a><br/>
	
	</form>
	

<?php


	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
require("../service/tconnection.php");	
if(isset($_REQUEST['submit'])){

	$id = $_POST['id'];
$name = $_POST['uname'];
$grade = $_POST['grade'];
$date = $_POST['date'];
$userprofile = $_SESSION['nname'];		
	if($id=="")
		
		{
			echo"<font color='red'>ID Can't Be Empty";
			return false;
			
			
		}
	if($name=="" || strlen($name)<3)
		{
			echo"<font color='red'>Name Can't Be Empty or Less Than Three Letters";
			return false;
			
			
		}
	
		
		
	if($date=="")
		
		{
			echo"<font color='red'>Date Can't Be Empty";
			return false;
			
			
		}
		
	
	else
	{
		$sql = "INSERT INTO grade VALUES('$id','$name','$grade','$date','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
echo "<font color='green'>Grade Posted Successfully";
}	
else
{
	echo "<font color='red'>Not Posted ";
}
		
}
}


?>
</fieldset>
</body>
</html>