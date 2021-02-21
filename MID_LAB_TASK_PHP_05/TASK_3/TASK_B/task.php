<!DOCTYPE html>
<html>
<?php 
if(isset($_POST['submit']))
{
	$day = $_POST['myday'];
	$month = $_POST['mymonth'];
	$year = $_POST['myyear'];
	if($day == "" || $month == "" || $year == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $day;
		echo "<br>";
		echo $month;
		echo "<br>";
		echo $year;
	}
}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>birthdate</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			&nbsp;&nbsp;&nbsp;dd
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>		
	<input type="num" size="1"; name="myday" value="" /> /
	<input type="num" size="1"; name="mymonth" value="" /> /
	<input type="num" size="1"; name="myyear" value="" />
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">
			
			
		</fieldset>
	</form>		
</body>
</html>