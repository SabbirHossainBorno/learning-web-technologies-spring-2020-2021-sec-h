<?php
      require_once ('../model/userDB.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];        
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $user= [
            'name'         =>$name,
            'email'        =>$email,
            'gender'       =>$gender,
            'dob'          =>$dob
                ];

                $status = insertUser($user);
        if ($status)
           {

            echo "success";
            }
            else{
              echo "failed";
                 }
    }          
?>