<?php

$price = 5000;

$vat=0.15;

$CalculateVat= $price + ($price * $vat);

echo  "Price Including Vat : " .$CalculateVat;
?>