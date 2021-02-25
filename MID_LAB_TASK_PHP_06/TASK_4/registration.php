<?php 
if(isset($_POST['submit']))
{
	$flag = 0;
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	$count4 = 0;
	$count5 = 0;
	$count6 = 0;
	$count7 = 0;
	$gender = "checked";
$name = $_POST['myname'];
$email = $_POST['myemail'];
$username = $_POST['myusername'];
$password = $_POST['mypassword'];
$confirmpass = $_POST['Confirmpassword'];
if(isset($_POST['gender'])){
$genders = $_POST['gender'];
}
$day = $_POST['myday'];
$month = $_POST['mymonth'];
$year = $_POST['myyear'];
$day1 = "";
$month1= "";
$year1 = "";

if($name == "" || $email == "" || $username == "" || $password == "" || $confirmpass == "" || $genders == "" || $day == "" || $month == "" || $year == "")
{
 echo "Fill up all the field........";
}else
{

	// for name
		if(strlen($name)>1){
		for ($i=0; $i < strlen($name) ; $i++){
			if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
			{ 
				$count+=1;
			}else{
				$count-=1;
			}
		}}else{
			echo "Failed....Input at least 2 charcter at Name.....";
			echo "<br>";
		}
		// for email
		if(strlen($email)>2){
				if(strpos($email, "@"))
				{
					$count1=1;					
			}else{
				echo "Failed....Input at least 3 charcter at email......";
				echo "<br>";
			}
		}
		// for user name
		if(strlen($username)>1){
		for ($i=0; $i < strlen($username) ; $i++){
			if(($username[$i]>="a" && $username[$i] <= "z") || ($username[$i] >= "A" && $username[$i] <= "B") || $username[$i] == "_" || $username[$i] == "-" || $username[$i] == ".")
			{ 
				$count2+=1;
			}else{
				$count2-=1;
			}
		}}else{
			echo "Failed....Input at least 2 charcter at username.....";
			echo "<br>";
		}
		// for password
			if(strlen($password)<=7){
				if(strpos($password, "@") || strpos($password, "#") || strpos($password, "$") || strpos($password, "%"))
				{
					$count3=1;					
				}
			}else{
				echo "Failed.....insert less than eight (8) characters......
				";
				echo "<br>";
			}
		
		// for confirm password
			if(strlen($confirmpass)<=7){
				if(strpos($confirmpass, "@") || strpos($confirmpass, "#") || strpos($confirmpass, "$") || strpos($confirmpass, "%"))
				{
					$count4=1;					
				}
			}else{
				echo "Failed.....insert less than eight (8) characters......
				";
				echo "<br>";
			}
			// for birthdate
		if($day>=1 && $day <=31)
		{
			$count5= 1;
		}
		if($month>=1 && $month <=12)
		{
			$count6= 1;
		}
		if($year>=1950 && $year <=2030)
		{
			$count7= 1;
		}
		// print section
		if(strlen($name)== $count && $count1 == 1 && strlen($username) == $count2 && $count3 == 1 && $count4 == 1 && $count5 == 1 && $count6 == 1 && $count7 == 1){
			if($password == $confirmpass){
			$showconfirmpass = $confirmpass;
			$showpassword = $password;
			$showname = $name;
			$showemail = $email;
			$showusername = $username;
			$day1 = $day;
			$month1= $month;
			$year1 = $year;
			echo "Insert successfully";
			echo "<br>";
			}else{
				echo "password and confirm password must be same....";
				echo "<br>";
			$showpassword = $password;
			$showname = $name;
			$showemail = $email;
			$showusername = $username;
			$day1 = $day;
			$month1= $month;
			$year1 = $year;
			}

		}else{
			if(strlen($name)!= $count){
				echo "Failed to insert!!!.....Name can contain alpha numeric characters, period, dash or underscore only.......";
				echo "<br>";
			}
			if ($count1 != 1) {
				echo "Failed to insert!!!....An Email should include '@'.......";
				echo "<br>";
			}
			if (strlen($username) != $count2) {
				echo strlen($username);
				echo "<br>";
				echo $count2;
				echo "Failed to insert!!!.....Username can contain alpha numeric characters, period, dash or underscore only.......";
				echo "<br>";
			}
			if ($count3 != 1) {
				echo "Failed to insert!!!....In password,Insert least one of the special characters (@, #, $, %).......";
				echo "<br>";
			}
			if ($count4 != 1) {
				echo "Failed to insert!!!....In confirm password,Insert least one of the special characters (@, #, $, %).......";
				echo "<br>";
			}
			if ($count5 != 1) {
				echo "Day cannot less than 1 and over 31";
				echo "<br>";
			}
			if ($count6 != 1) {
				echo "Month cannot less than 1 and over 12";
				echo "<br>";
			}
			if ($count7 != 1) {
				echo "year must be in 1950 t0 2030";
				echo "<br>";
			}
			$gender = "";
		}
}
}if(isset($_POST['reset'])){
		$showname = "";
		$showemail = "";
		$showusername = "";
		$showpassword = "";
		$showconfirmpass = "";
		$gender = "";
		$day1 = "";
		$month1= "";
		$year1 = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRATION</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Name</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="text" name="myname" value="<?php 
							if(isset($showname)){
								echo $showname;
								}?>"></td>
				</tr>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Email</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="email" name="myemail" value="<?php 
							if(isset($showemail)){
								echo $showemail;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">User Name</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="text" name="myusername" value="<?php 
							if(isset($showusername)){
								echo $showusername;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Password</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="password" name="mypassword" value="<?php 
							if(isset($showpassword)){
								echo $showpassword;
								}?>"></td>
				</tr>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Confirm Password</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="password" name="Confirmpassword" value="<?php 
							if(isset($showconfirmpass)){
								echo $showconfirmpass;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="70px;" style="border-bottom: 1px solid gray;" colspan="2">
						<fieldset>
							<legend>GENDER</legend>	
								<input type="radio" name="gender" value="Male" 
								<?php if(isset($_POST['gender']))
								{
									if($_POST["gender"] == "Male") {
										echo $gender;
									}} ?>> Male
								<input type="radio" name="gender" value="Female" 
								<?php if(isset($_POST['gender']))
								{
									if($_POST["gender"] == "Female") {
										echo $gender;
									}} ?>> Female
								<input type="radio" name="gender" value="Other" 
								<?php if(isset($_POST['gender'])){
									if($_POST["gender"] == "Other") {
										echo $gender;}} ?>> Other 			
							</fieldset>
					</td>
				</tr>

				<tr>
					<td height="70px;" style="border-bottom: 1px solid gray;" colspan="2">
						<fieldset>
							<legend>Date of Birth</legend>
							<input type="num" name="myday" value="<?php 
										if(isset($_POST['myday'])){
											echo $day1;
											}
 										?>" size="1">/
							<input type="num" name="mymonth" value="<?php 
											if(isset($_POST['mymonth'])){
												echo $month1;
											}
											 ?>" size="1">/
							<input type="num" name="myyear" value="<?php 
										if(isset($_POST['myyear'])){
											echo $year1;
										}
										 ?>" size="1">
							<em>(dd/mm/yyyy)</em>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td height="30px;" colspan="2">
						<input type="submit" name="submit" value="Submit">
						<input type="submit" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

</body>
</html>
