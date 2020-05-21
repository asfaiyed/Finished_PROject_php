<?php	
	session_start();
	
	//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>EXAM</title>
	
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
	alert("Name Can't Be Less Than 3 Letters");
return false;

}



var question = document.forms["logform"]["question"].value;

if(question==""){
	alert("Question Can't Be Empty");
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
<h1>UPLOAD QUESTIONS</h1>
	<form name="logform" onsubmit="return validate()" action="" method="POST">

	Id<br/>
		<input type="text" name="id" value=""/><br/>
		
	
	
		Name<br/>
		<input type="text" name="uname" value=""><br/>
		
	
		
		
		
		Question<br/>
		<textarea name="question" value=""></textarea><br/>
			Date<br/>
		<input type="date" name="date" value=""/><br/><br/>
	
		
		<input type="submit" name="submit" value="Submit"> 
		<a href ='../views/texamcheck.php'>Check Questions Here</a><br/><br/>
		<a href ='../views/texam.php'>Back</a><br/><br/>
	
	</form>
	

<?php


	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
require("../service/tconnection.php");	
if(isset($_REQUEST['submit'])){

	$id = $_POST['id'];
$name = $_POST['uname'];
$question = $_POST['question'];
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
	
			if($question=="")
		
		{
			echo"<font color='red'>Question Can't Be Empty";
			return false;
			
			
		}
		
	if($date=="")
		
		{
			echo"<font color='red'>Date Can't Be Empty";
			return false;
			
			
		}
		
	
	else
	{
		$sql = "INSERT INTO exam VALUES('$id','$name','$question','$date','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
echo "<font color='green'>Question Posted Successfully";
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