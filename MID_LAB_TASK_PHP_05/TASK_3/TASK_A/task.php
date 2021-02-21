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