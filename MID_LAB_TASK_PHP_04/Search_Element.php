<?php

$arr =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$element = 5;
$check = false;
foreach ($arr as $value) 
{
    if($value === $element)
    {
        echo "Element Found. <br> Element Was: $value";
        $check = true;
        break;
    }
}

if($check==false) echo "<br> Element not found.";
?>