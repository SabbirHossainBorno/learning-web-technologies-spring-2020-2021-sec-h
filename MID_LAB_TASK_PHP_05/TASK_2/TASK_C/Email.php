<?php
	
	$data = "";

	if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['Email'];
		
		if($name == "")
        {
			$data = "";
		}else{
			$data = $name;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email</title>
</head>

<body>

    <form method="post" action="Email.php">
        <fieldset">

            <legend><b>EMAIL</b></legend>
            <input type="email" name="email">
            <button title="Hint:Sample@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
            <hr>
            <input type="submit" value="Submit">

            </fieldset>
    </form>

</body>

</html>