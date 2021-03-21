<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$buyprice = $_POST['buyprice'];
		$sellprice = $_POST['sellprice'];
		if(isset($_POST['displayable']))
		{
			$displayable=$_POST['displayable'];
		}
		else{
			$displayable = 'no';
		}

		if($name == "" || $buyprice == "" || $sellprice == "" || $displayable == "")
		{
			echo "null submission";
		}else{
			$profit = $sellprice - $buyprice;
			$id = $_SESSION['id'];
			$product = [
							'id' => $id,
							'name' => $name,
							'profit' => $profit,
							'buyprice' => $buyprice,
							'sellprice' => $sellprice,
							'displayable' => $displayable			
							];
				unset($_SESSION['id']);

				$status = updateProduct($product);

				if($status)
				{
					header('location: ../view/display.php');
				}else{
					echo "error";
				}
		}

	}
?>