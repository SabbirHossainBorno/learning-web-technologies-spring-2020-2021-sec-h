<?php
  
    session_start();
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dd=$_SESSION['dd'];
   
    $mm=$_SESSION['mm'];
    $yyyy=$_SESSION['yyyy'];


    if(isset($_COOKIE['flag']))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - Merchant</title>
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
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="profile.php">Profile</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="user.php">User</a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="officer.php"><h3 align="center">Officer</h3></a></li></button>
                    
                    
                  
                </ul>
              </td>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Officer History</h1>
	</div>


	<div id="main_content">
		<table border="1">


			<tr>
				
				<td>NAME</td>
				<td>EMAIL</td>
        <td>Joining Date</td>
        <td></td>
               
			</tr>
			<tr>
      
				<td>Farjana  </td>
				<td> farjana@gmail.com </td>
				<td> 2-5-2020</td>
                <td>5000/- </td>
       
               
			</tr>

            <tr>
      
				<td>Sarkar Shuchi </td>
				<td> shuchi@gmail.com </td>
				<td> 4-6-2020</td>
                <td>10000/- </td>
       
               
			</tr>
		</table>
	</div>  
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
