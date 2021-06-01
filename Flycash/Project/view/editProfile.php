<?php
  
    session_start();
    //$user = $_SESSION['current_user'];
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];

     //$number=$_SESSION['mobilenumber'];

    if(isset($_COOKIE['flag']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - Edit Profile</title>
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
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="viewProfile.php"><h3 align="center">Profile</h3></a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="user.php">User</a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="officer.php">Officer</a></li></button>
                    
                    
                  
                </ul>
              </td>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                    <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" id='name' value="<?php echo $name ?>" ><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" id='email' value="<?php echo $email ?>"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="radio" name="gender" id='gender' value="Male"> Male
                            <input type="radio" name="gender" id='gender' value="Female"> Female
                            <input type="radio" name="gender" id='gender' value="Other"> Other
                            <hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="dob" id="dob" value="<?php echo $dob ?>" size="1" ><b> </b>
                        <input type="submit" name="submit" value="Submit" id="submit" onclick="editProfile()">
                         </fieldset>
                       
                  <h1 id="Message"></h1>
                </td>
                
                
            </tr>

        <tr>

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="center">
                <p>Copyright &#169; 2021</p>
            </td>

        </tr>

    </table>
    <script type="text/javascript" src="../script/validation.js"></script>

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