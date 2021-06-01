<?php


require_once('../model/officerDB.php');

$officer=$_GET ['n'];
$data=deleteOfficer($officer);
if ($data)
{
  echo "Deleted";
  header('location: ../view/dashboard.php');
}
else{
  echo "Failed";
}

?>
