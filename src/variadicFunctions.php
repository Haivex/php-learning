<?php

function writeEverything() {
    $args = func_get_args();
    for($i = 0; $i < count($args); $i++) {
        echo $args[$i] . "\n";
    }
}

function sum(int ...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}

writeEverything(1, 2, 3, 4);
echo sum(1, 2, 3, 4);
