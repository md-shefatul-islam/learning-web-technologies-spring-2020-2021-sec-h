
<?php 
if(isset($_POST['submit']))
{
	if(!empty ($_POST["degree"]))
	{
		foreach ($_POST["degree"] as $value) {
			echo $value;
			echo "<br>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Degree</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>DEGREE</legend>
				<input type="checkbox" name="degree[]" value="SSC">SSC
				<input type="checkbox" name="degree[]" value="HSC">HSC 
				<input type="checkbox" name="degree[]" value="Bsc">Bsc 
				<input type="checkbox" name="degree[]" value="Msc">Msc 
				<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
</body>
</html>