<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [
							'username' => $username,
                            'name' => $name,
                            'email' => $email,
							'password' => $password,
							'repass' => $repass,
							'type' => 'user'
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/home.php');
				}else{
					echo "error";
				}

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>