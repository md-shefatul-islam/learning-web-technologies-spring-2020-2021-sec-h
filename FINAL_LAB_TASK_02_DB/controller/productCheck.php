<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$buyprice = $_POST['buyprice'];
		$sellprice = $_POST['sellprice'];

		if($name == "" || $buyprice == "" || $sellprice == "")
		{
			echo "null submission";
		}else{
			$profit = $sellprice - $buyprice;
			$product = [
							'name' => $name,
							'profit' => $profit,
							'buyprice' => $buyprice,
							'sellprice' => $sellprice,
							'displayable' => 'yes'			
							];

				$status = insertProduct($product);

				if($status)
				{
					header('location: ../view/addproduct.php');
				}else{
					echo "error";
				}
		}

	}
?>