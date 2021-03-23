<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){

        $name =      $_REQUEST['name'];
        $id =        $_REQUEST['id'];
        $password =  $_REQUEST['password'];
        $cpassword = $_REQUEST['cpassword'];
        $email =     $_REQUEST['email'];
        $type =      $_REQUEST['type'];
        

        

        if($name == "" ||$id == "" | $password == "" || $cpassword == ""|| $email == "" ||$type == "" ){
            echo "Please Fill All Information 1st.";

        }
        else{

            if($password == $cpassword ){
                    

                       $user= [
                                'name'         =>$name,
                                'id'           =>$id,
                                'password'     =>$password,
                                'email'        =>$email,
                                'type'         =>$type
                                ];
                                $status = insertUser($user);
                                if ($status)
                                {
                                    header('location:../view/login.html');
                                    
                                }
                                else{
                                    echo "Login failed";
                                }
                            }
            }
        }
    
            else{
                echo "Password Don't Match.";
            }
?>