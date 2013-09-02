<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 12/05/13
 * Time: 12:42
 */
namespace org\home\OOP;

class foo
{
    static $bar = "bat";

    public static function baz()
    {

        echo "Hello World";
    }
}

$foo = new foo();
$foo->baz();
echo $foo->bar;