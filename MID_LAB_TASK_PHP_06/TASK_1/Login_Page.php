<?php

$User_Name= $_POST['User_Name'];
$Password=$_POST['Password'];


$User_Name_length= strlen($User_Name);
$Password_length =strlen ($Password);


if(isset($_POST['submit'])){
 if($User_Name_length<2)
   {
   	echo "Invalid User Name..";
   }
   else
   {
	   	if($Password_length<8)
	   		{
	   	echo "Password must not be less than eight (8) characters..";
	   }
	  
	   else
	   
	    {
		   	if(!preg_match('/[@#$%]/', $Password))
		   {
		   	echo "Password must contain at least one of the special characters (@, #, $, %)";
		   }
	   	else { echo "Log In Successful";}
	   }
   }
   
   
}

else{
    $blood = "";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <form method="post" action="Login_Page.php">

        <fieldset style="width: 300px;">

            <legend>LOGIN</legend>
            User Name : <input type="text" name="User_Name"> <br><br>
            Password : <input type="password" name="Password"> <br><br>
            <hr>
            <input type="checkbox" name="xyz[]" value="opt1"> Remember Me <br><br>
            <input type="submit" value="Submit"> <a href=" "> Forgot Password? </a>

        </fieldset>


    </form>

</body>

</html>