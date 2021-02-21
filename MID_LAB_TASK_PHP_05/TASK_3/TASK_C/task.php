<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>birthdate</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			&nbsp;&nbsp;&nbsp;dd
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>		
	<input type="num" size="1"; name="myday" value="<?php if(isset($_POST['myday'])){echo $_POST['myday'];}?>" /> /
	<input type="num" size="1"; name="mymonth" value="<?php if(isset($_POST['mymonth'])){echo $_POST['mymonth'];}?>" /> /
	<input type="num" size="1"; name="myyear" value="<?php if(isset($_POST['myyear'])){echo $_POST['myyear'];}?>" />
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">
			
			
		</fieldset>
	</form>		
</body>
</html>