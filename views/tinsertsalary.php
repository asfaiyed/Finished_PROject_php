<?php	
	session_start();
	
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>INSERT SALARY</title>
	
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



var salary = document.forms["logform"]["salary"].value;

if(salary==""){
	alert("Salary Can't Be Empty");
return false;

}
	
	
}
</script>
</head>
<body>
<fieldset>
<h1>INSERT SALARY</h1>
	<form name="logform" onsubmit="return validate()" action="" method="POST">

	id<br/>
		<input type="text" name="id" value=""/><br/>
		
	
	
		name<br/>
		<input type="text" name="uname" value=""><br/>
		
	
		
		
		
		Salary<br/>
		<input type="text" name="salary" value=""/><br/><br/>
		
	
		
		<input type="submit" name="submit" value="Submit"> 
		<a href ='../views/tsalary.php'>Check List Here</a><br/><br/>
	
	</form>
	

<?php


	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
require("../service/tconnection.php");	
if(isset($_REQUEST['submit'])){

	$id = $_POST['id'];
$name = $_POST['uname'];
$salary = $_POST['salary'];
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
	
			if($salary=="")
		
		{
			echo"<font color='red'>Salary Can't Be Empty";
			return false;
			
			
		}
		
	
	
	else
	{
		$sql = "INSERT INTO salary VALUES('$id','$name','$salary','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
echo "<font color='green'>Data  Inserted into Database";
}	
else
{
	echo "<font color='red'>Not Inserted. ";
}
		
}
}


?>
</fieldset>
</body>
</html>