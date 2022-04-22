<?php

function greeting($name) {
    echo "Hello {$name}";
}

function increment($first) {
    $first++;
    return $first;
}

function decrementWithReference(&$first) {
    $first--;
    return $first;
}

greeting('Mateusz');
greeting('Jan');
echo "\n";

//pass by value;
$other = 1;

echo increment($other);
echo $other;
echo "\n";

//pass by reference
$other2 = 10;
echo $other2;
echo "\n";
echo decrementWithReference($other2);
echo "\n";
echo $other2;


//optional parameters
function greetingWithOptional($name, $surname = null) {
    echo $name . " " . $surname;
}
greetingWithOptional('Adam');
greetingWithOptional('Ewa', 'Nowak');

//named parameters (in PHP 8.0 and above)
//greetingWithOptional($name : 'Błażej', $surname : 'Kowal');
//greetingWithOptional( $surname : 'Kowal', $name : 'Błażej');
