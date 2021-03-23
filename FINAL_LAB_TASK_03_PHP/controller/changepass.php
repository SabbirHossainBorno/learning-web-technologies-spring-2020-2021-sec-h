<?php
session_start();
$id = $_SESSION["id"];

  require_once('../model/userModel.php');

  if(isset($_REQUEST['change'])){

    $pass =  $_REQUEST['password'];
    $newpass = $_REQUEST['newpassword'];
    $renewpass= $_REQUEST['renewpassword'];
    

    if($pass == "" || $newpass == "" || $renewpass == ""){
      echo "null submission...";
    }else{

      $status = updatePass($newpass,$id);

        if($status){

          $user=getUserById($id);
            if($user['type']=="user")
                {
                   
                    header('location: ../view/user_home.php');
                }
                else if($user['type']=="admin")
                {
                    
                    header('location: ../view/admin_home.php');
                }

        }else{
          echo "Error 404 Found";
        }
        
    }

  }
?>