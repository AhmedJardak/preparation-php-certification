<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 11:49
 */

namespace org\home\functions;

function hello($who="World")
{
    echo "Hello $who".PHP_EOL;
}
hello();
hello("World");
/*Here we pass in the value, "World", and the function displays "Hello World"*/