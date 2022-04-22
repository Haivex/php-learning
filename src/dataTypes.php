<?php

//Scalar: int, string, boolean, float,

echo PHP_INT_SIZE; //size of the integer on a specific platform

$is_admin = true;
$is_user_logged_in = false;
$is_owner = fALSe; //case-insensitive

// -0 value ????
// "0" is false

//Compound object and arrays

$names = ['Jan', 'Adam', 'Janusz'];
echo $names[1]; //prints Adam;
echo "\n";

// !!! NEW FEATURE association arrays (something like Map() in JavaScript);
$prices = ['laptop' => 1000, 'smartphone' => 500, 'banana' => 2.36];
echo $prices['banana']; // prints 2.36
echo "\n";

$unsetVariable; //variable is default unset, we can unset assigned variable with unset($variable);

$nullVariable = null;

//Resource - External resource eg. Database Connection

$million = 1_000_000; //milion integer
$decimalEight = +010; //octal
$decimalSixteen = 0x10; //hex
$decimalTwo = 0b10; //dec


$amount = 100;
echo is_int($amount);
echo "\n";

$booleanValue = true;
echo is_bool($booleanValue);
echo "\n";
//is_array, is_float

$scientificNotation = 0.125E1;


$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // return false
echo "\n";


//STRING
$planet = 'Earth';
$greeting = "Hello $planet";
$greeting2 = "Hello {$planet}";

echo $greeting;
echo "\n";
echo $greeting2;
echo "\n";
echo strlen($greeting);
echo "\n";

// The closing identifier must begins at the first column of the line

$heredocText = <<<GIVEMEANEME
This is a heredocText. I can write here "double qoutes" without escaping and i can use variables $planet
GIVEMEANEME;

echo $heredocText;
echo "\n";

$nowDocText = <<<'GIVEMEANEMEWITHSINGLEQUOTE'
This is a nowdocText. I can write here "double qoutes" without escaping but i cannot use variables $planet
GIVEMEANEMEWITHSINGLEQUOTE;

echo $nowDocText;
echo "\n";


// NULL
$email = 'abc@cdf.qwe';
unset($email);

var_dump(null);
echo "\n";
var_dump($email);

is_null($email); //true
is_null('asdsa'); //false

$isTextNull = 'Example' === null;

//xor operator if one(not both) is true return true else return false;
