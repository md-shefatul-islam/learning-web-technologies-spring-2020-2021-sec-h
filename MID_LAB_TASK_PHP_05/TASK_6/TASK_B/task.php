
<?php 
if(isset($_POST['submit']))
{
	 $bloods = ($_POST["blood"]);
	if($bloods == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $bloods;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BLOOD GROUP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>BLOOD GROUP</legend>
	<select name="blood" id="">
	<option value="O-">O-</option>
	<option value="O+">O+</option>
	<option value="B-">B-</option>
	<option value="B+">B+</option>
	<option value="A-">A-</option>
	<option value="A+">A+</option>
	</select>
			<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
</body>
</html>