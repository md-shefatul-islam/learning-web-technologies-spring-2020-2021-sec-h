<?php
	$title= "Display";
	require_once('header.php');
	require_once('../model/productModel.php');
?>

<form method="POST" action="">
	<fieldset>
		<legend>DISPLAY</legend>
		<table border="1" cellspacing="0">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>profit</td>				
			</tr>
			<?php
			$product = getAllProduct();

			for ($i=0; $i < count($product) ; $i++) 
			{ 
				$id=$product[$i]['id'];
				$name = $product[$i]['name'];
				$profit = $product[$i]['profit'];
				$displayable = $product[$i]['displayable'];


					if($displayable == 'yes')
					{
					echo"<tr>
							<td>$id</td>
							<td>$name</td>
							<td>$profit</td>
							<td>
								<a href='edit.php?id=$id'>EDIT</a> |
								<a href='delete.php?id=$id'>DELETE</a> 
							</td>
						</tr>";
					}
			}

			?>
		</table>
		
	</fieldset>	
</form>
