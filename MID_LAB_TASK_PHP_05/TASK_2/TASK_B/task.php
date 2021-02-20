<?php 
if(isset($_POST['submit']))
{
	$email = $_POST['myemail'];
	if($email == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $email;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="task.php">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="email" name="myemail" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>		
</body>
</html>