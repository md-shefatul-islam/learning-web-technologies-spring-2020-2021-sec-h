<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$myfile = fopen('../controller/list.json', 'r');
				$data = fread($myfile, filesize('list.json'));
				$user1 = json_decode($data, true);
				$id=count($user1)+1;

				$user = [	'id'=>$id,
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];
				
				array_push($user1, $user);

				$data2 = json_encode($user1);
				$myfile1 = fopen('../controller/list.json', 'w');
				fwrite($myfile1, $data2);

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				// $_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>