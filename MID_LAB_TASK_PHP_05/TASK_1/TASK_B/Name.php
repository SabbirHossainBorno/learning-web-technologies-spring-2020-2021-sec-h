<?php

if(isset($_REQUEST['submit'])){
    
    if($_POST['Name']==""){
        
        echo "Please Insert A Name";       
    }    
    else{
        echo "Name: ".$_POST['Name'];
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Page</title>
</head>
<body>
    
    <form method="post" action="Name.php">
        
        <fieldset>
            
        <legend>NAME</legend>
        <input type="text" name="Name"> 
        <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>    
    </form>
    
</body>
</html>