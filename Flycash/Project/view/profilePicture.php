<?php
  
    session_start();
    //$user = $_SESSION['current_user'];
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dd=$_SESSION['dd'];
   
    $mm=$_SESSION['mm'];
    $yyyy=$_SESSION['yyyy'];

     //$number=$_SESSION['mobilenumber'];

    if(isset($_COOKIE['flag']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - View Profile</title>
</head>
<body>
    
    
    <table style="border:2px solid black; border-collapse: collapse;"  align="center"width="50%" >

        <tr >

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="right">

                 <img align="left" src="../asset/logo.jpg" alt="Logo"width="150" height="80">
                   <br> 
                 <b>Logged in as </b>
                <a  href="dashboard.php"><?php echo $name ?></a> |
                <a  href="../controller/logout.php">Logout</a>
            

        </tr>

        <tr >
           
            
            <td colspan="1" width="32%" >
              <b><h1>Admin</h1> </b>
              <hr align="left" width="90%">
                <ul align="left" >
                    
                     
                    <button type="button" style ="height:40px; width: 160px"><li><a  href="dashboard.php">Dashboard</a></li> </button>
                    <br>
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="profile.php"><h3 align="center">Profile</h3></a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="user.php">User</a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="officer.php">Officer</a></li></button>
                    
                    
                  
                </ul>
              </td>
            

            
                 <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                    <fieldset >
                  
                  <legend><b>PROFILE PICTURE</b></legend>
                  
                  <img src="../asset/admin.png" alt="User" height="150px" width="150px"><br>
                  <input type="file" name="image"><hr>
                  <input type="submit" name="submit" value="Submit">
                  
                  
              </fieldset>
                  
                </td>
                
                
            </tr>

        <tr>

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="center">
                <p>Copyright &#169; 2021</p>
            </td>

        </tr>

    </table>
    
</body>
</html>
<?php

  

  }
  else
  {
                echo "Login First";
                header('location:adminLogin.html');
  }
  

?>