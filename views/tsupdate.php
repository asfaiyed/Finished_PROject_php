<?php
session_start();

	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
	require("../service/tconnection.php");
	

		


$_GET['id'];
$_GET['name'];
$_GET['salary'];

?>
<!DOCTYPE html>
<html>
<head><title>UPDATE SALARY</title>
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



var salary = document.forms["form"]["salary"].value;

if(salary==""){
	alert("Salary Can't Be Empty");
return false;

}
}
</script>
</head>
<body>
<fieldset>
<h1>UPDATE SALARY</h1>
<form name="form" onsubmit="return valid()" method="GET">
id <br/><input type="text" name="id" value="<?php echo $_GET['id']; ?>"/><br/>
name <br/><input type="text" name="name" value="<?php echo $_GET['name']; ?>"/><br/>
salary <br/><input type="text" name="salary" value="<?php echo $_GET['salary']; ?>"/><br/>
<br/>
<input type="submit" name="submit" value="Update"/><a href ='../views/tsalary.php'>Check List Here</a><br/><br/>

</form>


<?php

	


if( isset($_REQUEST['submit'])){

	$id = $_GET['id'];
    $name = $_GET['name'];
    $salary = $_GET['salary'];
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
	
			if($salary=="")
		
		{
			echo"<font color='red'>Salary Can't Be Empty";
			return false;
			
			
		}
		else{
		
		
	
	$sql =  "UPDATE salary SET name='$name', salary='$salary' WHERE id='$id' ";
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

