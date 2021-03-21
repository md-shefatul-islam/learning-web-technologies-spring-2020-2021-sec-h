 <?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['submit']))
	{

				$id = $_SESSION['id'];
				$status = deleteProduct($id);

				if($status)
				{
					unset($_SESSION['id']);
					header('location: ../view/display.php');
				}else{
					echo "error";
				}
		

	}
?>