<?php
	
	require_once('db.php');

	function validateUser($id, $password){

		$conn = getConnection();

		$sql = "select * from log_reg where id='{$id}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from log_reg where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from log_reg";
		$result = mysqli_query($conn, $sql);
		
		$user =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($user, $row); 
			global $user;
		}

		return $user;

	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into log_reg values('{$user['name']}', '{$user['id']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updatePass($pass,$id){

		$conn = getConnection();
		
		$sql = "update log_reg set password='{$pass}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>