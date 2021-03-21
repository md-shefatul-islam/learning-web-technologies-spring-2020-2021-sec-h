<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="post" action="../controller/productCheck.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			Name <br>
			<input type="text" name="name" value=""><br>
			Buying Price <br>
			<input type="text" name="buyprice" value=""><br>
			Selling Price <br>
			<input type="text" name="sellprice" value=""><br>
			<hr>
			<input type="checkbox" name="box" value="">Display<br>
			<hr>
			<input type="submit" name="submit" value="SAVE"><br>
			
		</fieldset>
	</form>
</body>
</html>