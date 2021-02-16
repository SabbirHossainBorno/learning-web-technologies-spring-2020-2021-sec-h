<?php

if(isset($_REQUEST['submit']))
{ 
    if (isset($_POST['gender'])){echo "Gender: ".$_POST['gender'];}

else{echo "nothing was selected.";}

}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gender</title>
</head>

<body>

    <form method="post" action="Gender.php">

        <fieldset>

            <legend>GENDER</legend>

            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other <br>

        </fieldset>
        <br>
        <input type="submit" value="Submit">

    </form>

</body>

</html>