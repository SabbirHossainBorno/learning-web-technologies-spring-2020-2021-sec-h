
<?php
    session_start();
    

    if(isset($_POST['submit'])){
        

        $user_id =$_POST['userid'];
        $password = $_POST['password'];

         if($user_id == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
            //$user = $_SESSION['c_user'];
            $myfile= file_get_contents('userValidationInfo.json');
            $current_data = json_decode($myfile,true);
            foreach ($current_data as $search)
            {
                


                if($search['userid'] == $user_id && $search['password'] == $password){
                setcookie('flag', true, time()+3600, '/');


                
                $user_name=$search['name'];
                $user_id=$search['id'];
                
                $user_password=$search['password'];
                $user_type=$search['type'];


                $_SESSION['name']=$user_name;
                $_SESSION['password']=$user_password;
                $_SESSION['id']=$user_id;
                $_SESSION['type']=$user_type;
                }else{
                    echo "Username or password is invalid";
                } 
            }
            
        }

    }
    else if(isset($_POST['signup']))
        {
            header('registration.html');
        }
?>