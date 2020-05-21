<?php	
	session_start();
	 if(!isset($_SESSION['nname'])){  
		header("location: ../views/login.php");
	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD NOTES</title>
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
var file = document.forms["logform"]["file"].value;

if(file==""){
	alert("File Can't Be Empty");
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
<h1>UPLOAD NOTES</h1>
<form name="logform" onsubmit="return validate()" method="POST" action="" enctype="multipart/form-data">
	
	Id<br/>
		<input type="text" name="id" value=""/><br/>
	
		Name<br/>
		<input type="text" name="uname" value=""><br/>
		
		 File<br/>
		 <input type="file" id="myfile" name="file"><br/>
		 
		 Date<br/>
		<input type="date" name="date" value=""/><br/><br/>
		 <input type="submit" name="submit" value="Submit">
		<a href="../views/tnotescheck.php">Check Notes</a><br/><br/>
		<a href="../views/thome.php">Back</a><br/><br/>
		</form>
		
	<?php 
		require("../service/tconnection.php");
	if(isset($_REQUEST['submit'])){
		
$id = $_POST['id'];
$name = $_POST['uname'];
$userprofile = $_SESSION['nname'];
$date = $_POST['date'];
	
			$filename = $_FILES["file"]["name"];
		$tempname = $_FILES["file"]["tmp_name"];
    $folder = "upload/".$filename;

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
		if($filename=="")
		{
			echo"<font color='red'>File Can't Be Empty";
			return false;	
		}	
	if($date=="")
		
		{
			echo"<font color='red'>Date Can't Be Empty";
			return false;	
		}
		
	else
	{	
$sql = "INSERT INTO notes VALUES('$id','$name','$folder','$date','$userprofile')";
$data = mysqli_query($con, $sql);
if($data)
{
		move_uploaded_file($tempname,$folder);
echo "<font color='green'>Note Uploaded Successfully";
}	
else
{
	echo "<font color='red'>Not uploaded ";
}		
}
}			
?>
		</fieldset>
		</body>
		</html>