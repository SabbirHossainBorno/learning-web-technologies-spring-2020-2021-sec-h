<?php
	
	if(isset($_POST['submit']))
	{
		$Current_Password = $_POST['C_Password'];
		$New_Password = $_POST['N_Password'];
		$Retype_New_Password = $_POST['RN_Password'];

		if($Current_Password == $New_Password || $newPassword !== $Retype_New_Password)
		{
			echo "Please Type Again";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password</title>
</head>

<body>

    <form method="post" action="Password_Change_Page.php">

        <fieldset style="width: 360px;">

            <legend>CHANGE PASSWORD</legend>
            Current Password : <input type="password" name="C_Password"> <br><br>
            New Password : <input type="password" name="N_Password"> <br><br>
            Retype New Password : <input type="password" name="RN_Password"> <br><br>
            <hr>
            <input type="submit" value="Submit">

        </fieldset>


    </form>

</body>

</html>