<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 12:11
 */
namespace org\home\arraysoperations;
$array = array('foo' => 'bar', 'baz', 'bat' => 2);
function displayArray(&$array)
{
    reset($array);
    while (key($array) !== null) {
        echo key($array) . ": " . current($array) . PHP_EOL;
        next($array);
    }
}

displayArray($array);


