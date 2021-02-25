<?php
if (isset($_POST['submit'])) {		
	if($_POST['file'] != ""){
		$filename = $_POST['file'];
		
		$extention = pathinfo($filename, PATHINFO_EXTENSION);
		$size = filesize($filename);

		if($extention== "jpeg" || $extention== "jpg" || $extention== "png" || $size <= 4194304){		
			echo "Successfully uploaded ";
			echo "$filename <br>";
			echo "File extention is $extention<br>";
			echo  "file size is $size";
		}
		else {
			echo "Choose correct file.......";
		}
	}else{
			echo "Null submission.......";
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROFILE PICTURE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>PROFILE PICTURE</legend>
		<table>
			<tr>
				<td><img src="php.jpg" alt="icon" width="250px"></td>			
			</tr>
			<tr>
				<td><input type="file" name ="file" value=""></td>
			</tr>			
		</table>
		<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
</body>
</html>
