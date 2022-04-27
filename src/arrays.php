<?php

$numbers = [1, 2];
$numbers[] = 3;
var_dump($numbers);

echo $numbers[0];
echo "\n";

$numbers[2] = 3.5;

unset($numbers[1]);
var_dump($numbers);
echo "\n";

echo count($numbers);
echo "\n";

foreach ($numbers as $number) {
    echo 'Number: ' . $number . ", \n";
}


$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . "\n";
}

$scores = [1, 2, 3, 4, 5];

array_splice($scores, 2, 1); //remove one element

print_r($scores);


$points = [2, 3, 4];
array_unshift($points, 0.6);
array_push($points, 6.1);

print_r($points);


//array_keys
//array_key_last
//array_key_exists

$isInArray = in_array(6.1, $points); //return true, 3rd argument is strict compare
echo $isInArray;

//array_reverse - return new reversed array

$server_side = ['PHP'];
$client_side = ['JavaScript', 'CSS', 'HTML'];
$full_stack = array_merge($server_side, $client_side);
print_r($full_stack);

$numbers = [1, 2, ...$points];
//we can spread generators and traversable objects

$minAndMaxArray = [1.5, 999];
list($minValue, $maxValue) = $minAndMaxArray; // is the same: [$minValue, $maxValue] = $minAndMaxArray;
echo $minValue;
echo $maxValue;
