<?php

$age = 16;
$numberOfPeople = 2;

echo "You just can come in if you have more then 18 years old or ";
echo "16 years old with your parents" . PHP_EOL;

if ($age >= 18) {
    echo "You'r age is $age. Can come in alone!";
} elseif($age >= 16 && $numberOfPeople > 1) {
        echo "You are $age old, you are with your parents, so you can come in.";
}    else {
        echo "You are $age old . You can't come in";
        echo PHP_EOL . "I'm Sorry";   
    }

echo PHP_EOL;
echo "Goodbye";