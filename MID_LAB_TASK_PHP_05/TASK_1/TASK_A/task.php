<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['myname'];
	if($name == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $name;
	}
}