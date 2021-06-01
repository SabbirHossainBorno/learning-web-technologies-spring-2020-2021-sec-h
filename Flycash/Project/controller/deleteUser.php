<?php
  require_once('../model/userDB.php');
    session_start();
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $dob=$_SESSION['dob'];

    if(isset($_COOKIE['flag']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - User</title>
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
                    
                     
                    <button type="button" style ="height:40px; width: 160px"><li><a  href="../view/dashboard.php">Dashboard</a></li> </button>
                    <br>
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="../view/profile.php">Profile</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="../view/merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="../view/user.php"><h3 align="center">User</h3></a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="../view/officer.php">Officer</a></li></button>
                    
                    
                  
                </ul>
              </td>

<td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

<div id="page_title">
	<h1>Remove User</h1>
</div>

<div id='nav_bar'>
	<a href="../view/removeUser.php"> Back</a> |	
</div>


<div id="main_content">
	<form method="post" action="dUser.php">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete user?" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>

<tr>

<td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="center">
	<p>Copyright &#169; 2021</p>
</td>

</tr>

</table>

</body>
</html>
