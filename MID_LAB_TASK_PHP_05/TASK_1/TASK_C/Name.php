<?php	
	$data = "";
	if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['name'];
		
		if($name == "")
        {
			$data = "";
		}
        else
        {
			$data = $name;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Name</title>
</head>
<body>
    
    <form method="post">
        
        <fieldset>
            
        <legend>NAME></legend>
        <input type="text" name="name" value="<?=$data?>"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>     
    </form>
    
</body>
</html>