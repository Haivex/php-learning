<?php
// run php src/index.php to run script;

echo "HELLO FIRST \n"; // \n i single quote is ignored

define('PREFIX', 'OPTION');


define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

echo OPTION_2 . "\n";

const PI = 3.14;

echo PI . "\n";;

//echo type and variable value
var_dump(PI); // prints float(3.14)
echo "\n";

$exampleText = 'Simple string';

var_dump($exampleText); // prints string(13) Simple string
echo "\n";

die();

echo 'This cannot be executed';
