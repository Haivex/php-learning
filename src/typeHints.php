<?php

declare(strict_types=1);

function add(int $one, int $two): int {
    return $one + $two;
}

echo add(1, 5);
echo add(2.3, 1.7); //error if we declare strict type; no error: result will be 3;
//add('sea', 'dsa'); error will be thrown

//nullable type, union type

//Even though the functions.php declares the strict typing directive, it does not affect the index.php.
