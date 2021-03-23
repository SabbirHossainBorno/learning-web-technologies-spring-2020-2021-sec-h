<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){

        $id = $_REQUEST['id'];
        $password = $_REQUEST['password'];

        if($id == "" || $password == ""){
            echo "Null Submission...";
        }else{

            $status = validateUser($id, $password);
            if($status){
                $_SESSION['flag'] = true;
                $user=getUserById($id);
            if($user['type']=="user")
                {
                    $_SESSION['name']=$user['name'];
                    $_SESSION['id']=$user['id'];
                    header('location: ../view/user_home.php');
                }
                else if($user['type']=="admin")
                {
                    $_SESSION['name']=$user['name'];
                    $_SESSION['id']=$user['id'];
                    header('location: ../view/admin_home.php');
                }

                

            }else{
                echo "invalid user";
            }
        }

    }
?>