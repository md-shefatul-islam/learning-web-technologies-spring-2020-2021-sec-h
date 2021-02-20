<!DOCTYPE html>
<html lang="en">
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname"  value="<?php if(isset($_POST['myname'])){echo $_POST['myname'];}?>">
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>		
</body>
</html>