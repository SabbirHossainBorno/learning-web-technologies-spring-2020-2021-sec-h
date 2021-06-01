<?php


require_once('../model/merchantDB.php');

$merchant=$_GET ['n'];
$data=deleteMerchant($merchant);
if ($data)
{
  echo "Deleted";
  header('location: ../view/dashboard.php');
}
else{
  echo "Merchant cannot deleted";
}

?>