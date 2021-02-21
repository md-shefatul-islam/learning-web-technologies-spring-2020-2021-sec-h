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