<?php

if(isset($_REQUEST['submit']))
{
    
    if($_POST['Email']=="")
    {
        
        echo "nothing was inputed";
        
    }
    
    else
    {
        echo "Name: ".$_POST['Email'];
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