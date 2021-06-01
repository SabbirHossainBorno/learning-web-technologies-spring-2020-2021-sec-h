<?php
      require_once ('../model/merchantDB.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];        
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $merchant= [
            'name'         =>$name,
            'email'        =>$email,
            'gender'       =>$gender,
            'dob'          =>$dob
                ];

                $status = insertMerchant($merchant);
        if ($status)
           {

            echo "success";
            }
            else{
              echo "failed";
                 }
    }          
?>