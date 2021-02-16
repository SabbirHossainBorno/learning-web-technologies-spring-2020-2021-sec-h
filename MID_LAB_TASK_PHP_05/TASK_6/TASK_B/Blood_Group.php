<?php

if(isset($_REQUEST['submit']))
{
    
    echo "Blood Group: ".$_REQUEST['bloodGroup'];
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Group</title>
</head>

<body>

    <form method="post" action="Blood_Group.php">

        <fieldset>

            <legend>BLOOD GROUP</legend>
            <select name="bloodGroup">
                <option value="A+" selected>A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        <br>

    </form>

</body>

</html>