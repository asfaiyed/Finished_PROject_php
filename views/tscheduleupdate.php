<?php
session_start();
 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	

		


$_GET['id'];
$_GET['name'];
$_GET['day'];
$_GET['time'];
?>
<!DOCTYPE html>
<html>
<head><title>UPDATE SCHEDULE</title>
<script type="text/javascript">
function valid()
{
	
	var id = document.forms["form"]["id"].value;

if(id==""){
	alert("ID Can't Be Empty");
return false;

}
	
var name = document.forms["form"]["name"].value;



if(name==""){
	alert("Name Can't Be Empty");
return false;

}



if(name.length<3){
	alert("Name Can;t Be Less Than 3 Letters");
return false;

}


var day = document.forms["form"]["day"].value;

if(day==""){
	alert("Day Can't Be Empty");
return false;

}
var time = document.forms["form"]["time"].value;

if(time==""){
	alert("Time Can't Be Empty");
return false;

}
}
</script>
</head>
<body>
<fieldset>
<h1>UPDATE SCHEDULE</h1>
<form name="form" onsubmit="return valid()" method="GET">
id <br/><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/><br/>
name <br/><input type="text" name="name" value="<?php echo $_GET['name']; ?>"/><br/>
day <br/><input type="text" name="day" value="<?php echo $_GET['day']; ?>"/><br/>
time <br/><input type="text" name="time" value="<?php echo $_GET['time']; ?>"/><br/><br/>

<input type="submit" name="submit" value="Update"/><a href ='../views/tschedule.php'>Check List Here</a><br/><br/>

</form>


<?php

	


if( isset($_REQUEST['submit'])){

	$id = $_GET['id'];
$name = $_GET['name'];
$day = $_GET['day'];
$time = $_GET['time'];
	
	if($id=="")
		
		{
			echo"<font color='red'>ID Can't Be Empty";
			return false;
			
			
		}
	if($name=="" || strlen($name)<3)
		{
			echo"<font color='red'>Username Can't Be Empty or Less Than Three Letters";
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
		
	
	$sql =  "UPDATE schedule SET name='$name', day='$day', time='$time' WHERE id='$id' ";
   $data = mysqli_query($con,$sql);
if($data>0)
{
	echo "<font color='green'>Updated Successfully. ";
}
else
{
	echo "<font color='red'>Not Updated. ";
}

}
}
else
{
	echo "<font color='blue'>Click on Update Button to Save Changes";
}

?>
</fieldset>
</body>
</html>


