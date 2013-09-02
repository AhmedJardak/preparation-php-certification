<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 28/04/13
 * Time: 21:42
 */

namespace org\home\strings;


/**
 * Class ReplaceStrings
 * @package org\home\strings
 */
class ReplaceStrings
{


    function __construct()
    {
        echo str_replace("World", "Reader", "Hello World") . PHP_EOL;
        echo str_ireplace("world", "Reader", "Hello World") . PHP_EOL;
        $a = 0; // Initialize
        str_replace('a', 'b', 'a1a1a1', $a);
        echo $a . PHP_EOL; // outputs 3
        echo str_replace(array("Hello", "World"), array("Bonjour", "Monde"), "Hello
World") . PHP_EOL;
        echo str_replace(array("Hello", "World"), "Bye", "Hello World") . PHP_EOL;

    }

    public function substringReplace()
    {
        echo substr_replace("Hello World", "Reader", 6) . PHP_EOL;
        echo substr_replace("Canned tomatoes are good", "potatoes", 7, 8) . PHP_EOL;
    }

    public function substring()
    {
        $x = '1234567';
        echo substr($x, 0, 3) . PHP_EOL; // outputs 123
        echo substr($x, 1, 1) . PHP_EOL; // outputs 2
        echo substr($x, -2) . PHP_EOL; // outputs 67
        echo substr($x, 1) . PHP_EOL; // outputs 234567
        echo substr($x, -2, 1) . PHP_EOL; // outputs 6

    }
}

$replaceStrings = new ReplaceStrings();
$replaceStrings->substringReplace();
$replaceStrings->substring();
