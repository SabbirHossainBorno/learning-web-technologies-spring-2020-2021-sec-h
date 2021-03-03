<?php
	$title= "Home Page";
	include('header.php');
?>
	

	<div id="page_title">
		<h1 align="center">Welcome home, 
			<?php
				$userFile = fopen("../model/userValidationInfo.json", "r");
				$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
				$userInfo = json_decode($userData, true);
				$username = $userInfo['user'];
				echo $username; 
			?>		
		</h1>
	</div>

	<div id='nav_bar' align="center">
		<a href="create.php"> Create New User</a> |
		<a href="user_list.php"> View User List</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		
	</div>


<?php include('footer.php'); ?>