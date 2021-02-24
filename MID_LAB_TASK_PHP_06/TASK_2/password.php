<?php 
if(isset($_POST['submit']))
{
$currentpass = $_POST['currentpassword'];
$newpass = $_POST['newpassword'];
$newpass2 = $_POST['newpassword1'];
if($currentpass != $newpass )
{
if($newpassword == $newpass2)
{
echo "Passwword Change Successfully........!!!";
}else{
echo "New Passwword and  Retype New Passwword must be same......";
}
}else
{
 echo " Current Passwword and New Passwword can not be same.....";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td>Current Password</td>
					<td>:<input type="password" name="currentpassword" value=""></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td>:<input type="password" name="newpassword" value=""></td>
				</tr>
				<tr>
					<td>Retype New Password</td>
					<td>:<input type="password" name="newpassword1" value=""></td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="submit" value="submit">
		</fieldset>
		</form>

</body>
</html>
