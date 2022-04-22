<?php

$name = 'Jan'; //global

function something() {
    $name = 'Adam'; //local, Jan is untouched
    echo $name . '!';
}
something();

function something2() {
    global $name;
    $name = 'Ewa';
    echo $name;
}
something2();
echo $name;

//static is something like generator (yield) in JavaScript
function getCounter() {
    static $counter = 1;
    return $counter++;
}

echo getCounter(); // 1
echo getCounter(); // 2
echo getCounter(); // 3
