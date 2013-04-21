<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 10:58
 */

namespace org\home\functions;

print("-------------------------------------------------" . PHP_EOL);
print("global variable" . PHP_EOL);
$a = "Hello World" . PHP_EOL;
function helloWorld1()
{
    $a = "Hello Reader";
    $b = "How are you";

}

helloWorld1();
echo $a;
//echo $b;//undefined variable in global Scope NB: uncomment to view error
print("-------------------------------------------------" . PHP_EOL);
print("how to accesses global variable in functions" . PHP_EOL);
$a = "Hello";
$b = "World";
function helloWorld()
{
    global $a, $b;
    echo "$a $b" . PHP_EOL;
}

helloWorld();
print("-------------------------------------------------" . PHP_EOL);
print("how to accesses global variable in functions(preferred Method)" . PHP_EOL);

$a = "Hello";
$b = "World";
function hello()
{
    if (!empty($GLOBALS['a'])) {
        if (!empty($GLOBALS['b'])) {
            echo $GLOBALS['a'] . ' ' . $GLOBALS['b'] . PHP_EOL;
        }
    }
}

hello(); // Displays "Hello World"
print("-------------------------------------------------" . PHP_EOL);
