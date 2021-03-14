<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
   
    $password=$_POST['password'];
    $npass=$_POST['npass'];
    $repass=$_POST['repass'];

	if($password == "" || $npass == "" || $repass == "")
		{
			echo "failed to update....";
			header('location: ../view/editprocess.php');
			
		}else{
					if(file_exists("../controller/list.json"))
					{
						$myfile = fopen('../controller/list.json', 'r');
						$data = fread($myfile, filesize('list.json'));
						$user = json_decode($data, true);
						
						for ($i=0; $i < sizeof($user); $i++)
                   		{
			                    if($user[$i]['id']==$_SESSION['id'])
			                    {
			                    	if($user[$i]['password']==$password)
			                    	{

			                    		if($npass==$repass)
			                    		{
			                    			if($user[$i]['radio'] == 'User')
										{
												$user[$i]['password']=$npass;
			        				
											$data1 = json_encode($user);
											$myfile1 = fopen('../controller/list.json', 'w');
											fwrite($myfile1, $data1);
											header('location: change_password.php');
											
										}
										elseif($user[$i]['radio'] == 'Admin')
										{
											$user[$i]['password']=$npass;
			        				
											$data1 = json_encode($user);
											$myfile1 = fopen('../controller/list.json', 'w');
											fwrite($myfile1, $data1);
											header('location: change_password.php');
											}
										}
										else{
											echo "new password and retype new password should be same";
			                    		}
			                    	}
									else{
										echo "Invalid current password";
			                    	}
							   }        
						}
					}else{
						echo "file does not found....";
						echo "<br>";
				}

			}	
			
		}
	

?>