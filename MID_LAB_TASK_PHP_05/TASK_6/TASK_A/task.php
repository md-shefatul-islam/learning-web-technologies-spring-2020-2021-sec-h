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