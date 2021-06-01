<?php
  
    session_start();
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];

    if(isset($_COOKIE['flag']))
    {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - Add Officer</title>
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
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="viewProfile.php">Profile</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="user.php">User</a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="officer.php"><h3 align="center">Officer</h3></a></li></button>
                    
                    
                  
                </ul>
              </td>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                  <form action="../controller/officerReg.php" method="post">
                    <fieldset>
                       
                       <legend><b>User Info</b></legend>
                       
                       <br>

                        <b>Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="name" >
                        <hr>
                        <b>Email</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="email"  >
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        <hr>

                        <fieldset>

                            <legend><b>Gender</b></legend>

                            <input type="radio" name="gender" value="Male"> <b>Male</b>
                            <input type="radio" name="gender" value="Female"> <b>Female</b>
                            <input type="radio" name="gender" value="Other"> <b>Other</b>

                        </fieldset >
                       
                        <hr>

                        <fieldset >

                            <legend><b>Date of Birth</b></legend>

                            <input type="date" name="dob" size="1"><b> (dd/ mmm/yyyy)

                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="Reset" name="Reset" value="Reset">

                    </fieldset>
                       </form>
                       
                  
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