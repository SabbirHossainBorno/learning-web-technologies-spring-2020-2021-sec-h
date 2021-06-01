<?php


require_once('../model/userDB.php');

$user=$_GET ['n'];
$data=deleteUser($user);
if ($data)
{
  echo "Deleted";
  header('location: ../view/dashboard.php');
}
else{
  echo "Failed";
}

?>