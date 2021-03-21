<?php
	$title= "Delete";
	require_once('header.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$_SESSION['id'] = $_GET['id'];
	$product =  getProductById($id);
?>
<body>
	<form method="post" action="../controller/productDelete.php">
		<fieldset>
			<legend>ADD PRODUCT</legend>
			Name: <?=$product['name']  ?>
			<br>
			Buying Price: <?=$product['buying_price']  ?>
			<br>
			Selling Price: <?=$product['selling_price']  ?>
			<br>
			Displayable: <?=$product['displayable']  ?>
			<br>
			<hr>
			<input type="submit" name="submit" value="Delete"><br>
			
		</fieldset>
	</form>
</body>
</html>