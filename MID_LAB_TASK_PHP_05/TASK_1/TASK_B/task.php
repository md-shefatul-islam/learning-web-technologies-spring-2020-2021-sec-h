<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['myname'];
	if($name == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $name;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>		
</body>
</html>