<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="text" name="myemail"  value="<?php if(isset($_POST['myemail'])){echo $_POST['myemail'];}?>">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>		
</body>
</html>