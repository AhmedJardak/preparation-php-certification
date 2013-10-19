<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 12/05/13
 * Time: 12:42
 */
namespace org\home\OOP;


include "out.php";
class foo
{
    use out;

    static $bar = "bat";

    public static function baz()
    {

        echo "Hello World";
    }
}

$foo = new foo();
var_dump($foo);
$foo->baz();
echo $foo->bar;
$foo->printLn("trait output");

