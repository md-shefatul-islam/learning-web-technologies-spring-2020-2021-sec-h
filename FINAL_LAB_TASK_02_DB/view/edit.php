<?php
	$title= "EDIT PRODUCT";
	require_once('header.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$_SESSION['id'] = $_GET['id'];
	$product = getProductById($id);


?>
	<form method="post" action="../controller/editCheck.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			Name <br>
			<input type="text" name="name" value="<?=$product['name']  ?>"><br>
			Buying Price <br>
			<input type="text" name="buyprice" value="<?=$product['buying_price']  ?>"><br>
			Selling Price <br>
			<input type="text" name="sellprice" value="<?=$product['selling_price']  ?>"><br>
			<hr>
			<input type="checkbox" name="displayable" value="yes" <?php if($product['displayable'] =='yes'){echo 'checked';}  ?>>Display<br>
			<hr>
			<input type="submit" name="submit" value="SAVE"><br>
			
		</fieldset>
	</form>
</body>
</html>