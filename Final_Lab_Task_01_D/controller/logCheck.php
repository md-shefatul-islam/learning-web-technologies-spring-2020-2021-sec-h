<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$myfile = fopen('list.json', 'r');
			$data = fread($myfile, filesize('list.json'));
			$user = json_decode($data, true);
			
			for ($i=0; $i < sizeof($user); $i++) 
			{ 

				if($id==$user[$i]['id'])
				{
					if($password==$user[$i]['password'])
					{
						if($user[$i]['radio'] == 'User')
						{
							$_SESSION['flag'] = true;
							$_SESSION['id']= $user[$i]['id'];
							$_SESSION['name']=$user[$i]['name'];
							$_SESSION['radio']=$user[$i]['radio'];
							header('location: ../view/user_home.php');	
						}
						elseif($user[$i]['radio'] == 'Admin')
						{
							$_SESSION['flag'] = true;
							$_SESSION['id']= $user[$i]['id'];
							$_SESSION['name']=$user[$i]['name'];
							$_SESSION['radio']=$user[$i]['radio'];
							header('location: ../view/admin_home.php');
						}
					
					}
				}
				else{
					echo "Invalid username or password ...";
				}
				
			}
				
		}	

	}
?>