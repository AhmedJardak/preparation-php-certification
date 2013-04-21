<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 21:44
 */

namespace org\home\functions;


class variableLengthargumentsList {

}
function hello()
{
    if (func_num_args() > 0) {
    $arg = func_get_arg(0); // The first argument is at position 0
echo "Hello $arg";
} else {
    echo "Hello World";
}
}
hello("Reader"); // Displays "Hello Reader"
hello(); // Displays "Hello World"

function countAll($arg1)
{
    if (func_num_args() == 0) {
    die("You need to specify at least one argument");
} else {
    $args = func_get_args(); // Returns an array of arguments
// Remove the defined argument from the beginning
array_shift($args);
$count = strlen ($arg1);
foreach ($args as $arg) {
    $count += strlen($arg);
}
}
return $count;
}
echo countAll("foo", "bar", "baz"); // Displays ’9’