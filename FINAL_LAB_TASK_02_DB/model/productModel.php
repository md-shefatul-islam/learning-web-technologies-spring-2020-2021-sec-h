<?php
	
	require_once('db.php');

	function getProductById($id){

		$conn = getConnection();

		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('', '{$product['name']}' , '{$product['profit']}' , '{$product['buyprice']}' , '{$product['sellprice']}', '{$product['displayable']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){

		$conn = getConnection();
		$sql = "update products set name='{$product['name']}', profit='{$product['profit']}' , buying_price='{$product['buyprice']}' , selling_price='{$product['sellprice']}', displayable='{$product['displayable']}' where id = '{$product['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>