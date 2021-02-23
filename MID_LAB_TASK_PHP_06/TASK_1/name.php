<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['myname'];
	$password = $_POST['mypassword'];
	if($name != "" && $password != ""){
		if(($name>="a" && $name <= "z") || ($name >= "A" && $name <= "B") || $name == "_" || $name == "-" || $name == "."){
			if(strlen($name)>1){

				echo "insert successfully.....";
			}else{
				echo "Failed....Input at least 2 charcter at User Name.....";
			}
		}else{
			echo "Failed.....Name can contain alpha numeric characters, period, dash or underscore only....";
		}
		if($password != ""){
			if(strlen($password)<=7){
				if(strpos($password, "@") || strpos($password, "#") || strpos($password, "$") || strpos($password, "%"))
				{
					echo "Insert successfully.....";
				}else{
					echo "Failed!!!....Insert least one of the special characters (@, #, $, %).......";
				}
			}else{
				echo "Failed.....insert less than eight (8) characters......
				";
			}
		}
	}else{
			echo "Input name or password......";
		 }	
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="myname" value="<?php 
					if(isset($_POST['myname'])){
						if(strlen($name)>1){
						echo $_POST['myname'];
					}}?>"></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="mypassword" value="<?php 
					if(isset($_POST['mypassword'])){
						if(strlen($password)>1){
						echo $_POST['mypassword'];
					}}?>"></td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="remember" value="remember" <?php if(isset($_POST['remember'])){if($_POST["remember"] == "remember") {echo 'checked';}} ?>>Remember Me
			<br> <br>
			<input type="submit" name="submit" value="Submit">
			<a href="">Forgot Password?</a>
		</fieldset>
	</form>		
 </body>
 </html>