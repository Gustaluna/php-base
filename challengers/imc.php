<?php

$weight = 60;
$height = 1.74;
$imc = $weight / $height ** 2;

echo "you'r IMC is $imc. you have the IMC ";

if($imc < 18){
    echo "lower";
}elseif ($imc < 25) {
    echo "good";
}else{
    echo "higher";
}

