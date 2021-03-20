<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass)
			{
				$user = 
				[
					'username' => $username,
					'name' => $name,
					'email' => $email,
					'password' => $password,
					'repass' => $repass,
					'type' => 'user',
				];
				$status = insertUser();

			if($status)
				{
					header('location: ../view/login.html');
				}
				else
					{
						echo "error";
					}

				
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>