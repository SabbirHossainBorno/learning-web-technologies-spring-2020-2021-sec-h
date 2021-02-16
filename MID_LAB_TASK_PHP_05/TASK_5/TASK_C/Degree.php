<?php

$degree = "";

if(isset($_REQUEST['submit']))
{
    
    if(isset($_REQUEST['degree']))
    {
        $degree = "";
        $degree_arr = $_REQUEST['degree'];
        for($i = 0; $i < count($degree_arr); $i++)
        {
            
            $degree = $degree.$degree_arr[$i].",";
            
        }
        $degree = rtrim($degree, ",");
    }
    
    else
    {
        
        $degree = "Nothing was selected";
    }
    
}

else
{
    
    $degree = "";
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Degree</title>
</head>

<body>

    <form method="post" action="Degree.php">

        <fieldset>

            <legend>DEGREE</legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="Bsc"> Bsc
            <input type="checkbox" name="degree[]" value="Msc"> Msc
            <hr>
            <input type="submit" value="Submit">

        </fieldset>

    </form>

</body>

</html>