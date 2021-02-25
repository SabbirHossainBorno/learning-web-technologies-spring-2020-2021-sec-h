<?php 
    session_start();

    if(isset($_POST['submit'])){
        $user = $_SESSION['current_user'];
        $email= $user['email'];
        $message = 'Please Enter an Email';

        if ($email =="")
        {
            echo "Please Enter an Email";
            header('location: forgotPassword.php');
        }
        else
        {
            echo "An email has been sent to reset Password";
            header('location: login.html');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XCompany - Forgot Password</title>
</head>
<body>
    
    <table style="border:2px solid black; border-collapse: collapse;" align="center" width="50%">

        <tr>

            <td style="border:2px solid black; border-collapse: collapse;" align="right">

                 <img align="left" src="logo.png" alt="Logo"width="250" height="60">
                    <br>
                 <a href="publicHome.html">Home  </a>|
                <a  href="login.html">Login</a>|
                <a  href="registration.html">Registration</a>
            </td>


        </tr>

        <tr>
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
                <form action="forgotPassword.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:45%; margin:  0px auto;">
                        
                        <legend><b>FORGOT PASSWORD</b></legend>
                        
                        Enter Email&nbsp;:&nbsp;<input type="email" name="email"><hr>
                        <input type="submit" name="submit" value="Submit"><br><br> 
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>
                
            </td>
            
        </tr>

        <tr>

            <td colspan="2" align="center">
                <p>Copyright &#169; 2017</p>
            </td>

        </tr>

    </table>
    
</body>
</html>