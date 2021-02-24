<!DOCTYPE html>
<html>
<?php 
if(isset($_POST['submit']))
{

	$day = $_POST['myday'];
	$day1 = 0;
	$month = $_POST['mymonth'];
	$month1 = 0;
	$year = $_POST['myyear'];
	$year1 = 0;
	if($day == "" || $month == "" || $year == "")
	{
		echo "null submission......";
		if($day == "")
		{
			echo "Insert the day.....";
		}
		if($month == "")
		{
			echo "Insert the month....";
		}if($year == "")
		{
			echo "Insert the year....";
		}
	}else{
		if($day>=1 && $day <=31)
		{
			$day1= $day;
			echo $day;
		}else
		{
			echo "Day cannot over 31";
		}
		if($month>=1 && $month <=12)
		{
			$month1= $month;
			echo $month;
		}else
		{
			echo "Month cannot over 12";
		}
		if($year>=1950 && $year <=2030)
		{
			$year1= $year;
			echo $year;
		}else
		{
			echo "year must be in 1950 t0 2030";
		}
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
			&nbsp;&nbsp;&nbsp;ddd
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>		
	<input type="num" min="1" max="31"size="1"; name="myday" value="
<?php 
if(isset($_POST['myday'])){
	echo $day1;
}
 ?>">/
	<input type="number" min="1" max="12" size="1"; name="mymonth" value="">/
	<input type="number" min="1950" max="2050" size="1"; name="myyear" value="">
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">
			
			
		</fieldset>
	</form>		
</body>
</html>