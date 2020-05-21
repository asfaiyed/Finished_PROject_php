<?php	
	session_start();
	
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST NOTICES</title>
	
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


var notice = document.forms["logform"]["notice"].value;

if(notice==""){
	alert("Notice Can't Be Empty");
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
<h1>POST NOTICES</h1>
	<form name="logform" onsubmit="return validate()" action="" method="POST">

	Id<br/>
		<input type="text" name="id" value=""/><br/>
		
	
	
		Name<br/>
		<input type="text" name="uname" value=""><br/>
		
	
		
		
		
		Notice<br/>
		<input type="text" name="notice" value=""/><br/>
			Date<br/>
		<input type="date" name="date" value=""/><br/><br/>
	
		
		<input type="submit" name="submit" value="Submit"> 
		<a href ='../views/tpnoticescheck.php'>Check List Here</a><br/><br/>
		<a href ='../views/tnotices.php'>Back</a><br/>
	
	</form>
	

<?php


	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
require("../service/tconnection.php");	
if(isset($_REQUEST['submit'])){

	$id = $_POST['id'];
$name = $_POST['uname'];
$notice = $_POST['notice'];
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
	
			if($notice=="")
		
		{
			echo"<font color='red'>Notice Can't Be Empty";
			return false;
			
			
		}
		
	if($date=="")
		
		{
			echo"<font color='red'>Date Can't Be Empty";
			return false;
			
			
		}
		
	
	else
	{
		$sql = "INSERT INTO pnotices VALUES('$id','$name','$notice','$date','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
echo "<font color='green'>Notice Posted Successfully";
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