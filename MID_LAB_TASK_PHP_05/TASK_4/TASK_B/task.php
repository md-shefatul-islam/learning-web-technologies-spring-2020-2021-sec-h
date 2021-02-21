<?php 
if(isset($_POST['submit']))
{
	 $genders = $_POST["gender"];
	if($genders == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $genders;
	}
}
?>
<!DOCTYPE html>
<html>
<head>	
	<title>GENDER</title>
</head>
<body>
<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>	
	<input type="radio" name="gender" value="Male"> Male
	<input type="radio" name="gender" value="Female"> Female
	<input type="radio" name="gender" value="Other"> Other 
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">				
		</fieldset>
	</form>			
</body>
</html>