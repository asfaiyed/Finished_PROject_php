<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
require("../service/tconnection.php");	
	//error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>INSERT SCHEDULE</title>
	
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


var day = document.forms["logform"]["day"].value;

if(day==""){
	alert("Day Can't Be Empty");
return false;

}
var time = document.forms["logform"]["time"].value;
if(time==""){
	alert("Time Can't Be Empty");
return false;

}	
	
}
</script>
</head>
<body>
<fieldset>
<h1>INSERT SCHEDULE</h1>
	<form name="logform" onsubmit="return validate()" action="" method="POST">

	id<br/>
		<input type="text" name="id" value=""/><br/>
	
	
		name<br/>
		<input type="text" name="uname" value=""><br/>
		

		
		day<br/>
		<input type="text" name="day" value=""/><br/>
		time<br/>
		<input type="text" name="time" value=""/><br/><br/>
		
		
	
		
		<input type="submit" name="submit" value="Submit"> 
		<a href ='../views/tschedule.php'>Check List Here</a><br/><br/>
	
	</form>
	</div>


<?php


if(isset($_REQUEST['submit'])){
$id = $_POST['id'];
$name = $_POST['uname'];
$day = $_POST['day'];
$time = $_POST['time'];
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
	
			if($day=="")
		
		{
			echo"<font color='red'>Day Can't Be Empty";
			return false;
			
			
		}
		if($time=="")
		
		{
			echo"<font color='red'>Time Can't Be Empty";
			return false;
			
			
		}
	
	
	else
	{
	
	
	
		$sql = "INSERT INTO schedule VALUES('$id','$name','$day','$time','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
echo "<font color='green'>Data  Inserted into Database";
}	

		
	
	
	else
	{
		echo "<font color='red'>Not Inserted";
	}
	
}
}
?>
</fieldset>
</body>
</html>