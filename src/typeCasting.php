<?php

echo (int)654.43; // 654
echo "\n";

echo (int)654.99; // 654
echo "\n";

echo (float)13;
echo "\n";

$amount =  (int)'100$';
echo $amount; // 100
echo "\n";

$invalidAmount = (int)'$100';
echo $invalidAmount; //be 0
echo "\n";

$amountToString = (string)1000;
echo $amountToString . '$'; //OR echo 1000 . '$';
echo "\n";

$isTrue = true;
echo (string)$isTrue; // 1
echo "\n";

$numbers = [1,2,3];
$str = (string) $numbers;
echo $str; // Array and PHP Warning!
echo "\n";

//Jugling
echo 100 + '20'; //120
echo "\n";

echo '20' == 20; //true
echo "\n";
