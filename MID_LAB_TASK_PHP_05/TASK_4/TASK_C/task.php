<!DOCTYPE html>
<html>
<head>	
	<title>GENDER</title>
</head>
<body>
<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>	
	<input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender'])){if($_POST["gender"] == "Male") {echo 'checked';}} ?>> Male
	<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender'])){if($_POST["gender"] == "Female") {echo 'checked';}} ?>> Female
	<input type="radio" name="gender" value="Other" <?php if(isset($_POST['gender'])){if($_POST["gender"] == "Other") {echo 'checked';}} ?>> Other 
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">				
		</fieldset>
	</form>			
</body>
</html>