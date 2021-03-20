<?php

    require_once('db.php');

    function validateUser($username, $password)
    {
        $conn = getConnection();

        $sql = "select * from users where username= '{$username}' and password= '{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

        if(count($row) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    function getUserById($id)
    {
        $conn = getConnection();

        $sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

        $users = [];

        while($row = mysqli_fetch_assoc($result))
        {
            array_push($users, $row);
        }

        return $row;
    }

    function getAllUser()
    {
        $conn = getConnection();

        $sql = "select * from users where id= '{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

        return $row;
    }
    
    function insertUser($user)
    {
        $conn = getConnection();
		$sql = "insert into users (id, username, name, email, password, repass, type) values ('', '{$user['username']}', '{$user['name']}', '{$user['email']}', '{$user['password']}', '{$user['repass']}', '{$user['type']}')";
		if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function updateUser($user)
    {
        $conn = getConnection();
		$sql = "update users set username = '{$user['username']}', name = '{$user['name']}', email = '{$user['email']}', password = '{$user['password']}', repass = '{$user['repass']}', type = '{$user['type']}')";
		if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function deleteUser($id)
    {
        $conn = getConnection();
		$sql = "delete from users where id={$id}";
		if(mysqli_query($conn, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>