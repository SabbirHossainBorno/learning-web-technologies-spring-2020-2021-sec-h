<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == ""){
			echo "null submission...";
		}else{

			

				$user = [
					'username' => $username,
					'name' => $name,
					'email' => $email,
					'password' => $password,
					'repass' => $repass,
					'type' => 'user'
						];

				$status = updateUser($user);

				if($status){
					header('location: ../view/home.php');
				}else{
					echo "error";
				}

			
		}

	}
?>