
<?php
	$title= "change password";
	include('header.php');
	// if(file_exists("../controller/list.json"))
	//  {
	// 	$myfile = fopen('../controller/list.json', 'r');
	// 	$data = fread($myfile, filesize('../controller/list.json'));
	// 	$user = json_decode($data, true);
		
	// 	for ($i=0; $i < sizeof($user); $i++)
 //   		{
 //   			if($user[$i]['id']==$_SESSION['id'])
	// 		        {
?>
<center>
	<form method="POST" action="../controller/editprocess.php">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="password" /><br />
						New Password<br />
						<input type="password" name="npass" /><br />
						Retype New Password<br />
						<input type="password" name="repass"/>								
						<hr />
						<input type="submit" name="submit" value="Change" />     
						<a href="<?php if($_SESSION['radio']=='User')
			                    { echo 'user_home.php'; }
			                    else{echo 'admin_home.php';}?>">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>
<?php 

 ?>