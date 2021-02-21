<?php 
if(isset($_POST['submit']))
{
	 $genders = ($_POST["gender"]);
	if($genders == "")
	{
		echo "null submission";
	}else{
		echo "sucess......";
		echo $genders;
	}
}

?>