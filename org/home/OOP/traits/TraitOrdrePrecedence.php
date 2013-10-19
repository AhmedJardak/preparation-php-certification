<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 18:56
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\OOP\traits;

trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!' . PHP_EOL;
    }
}

class TheWorldIsNotEnough
{
    use HelloWorld;

    public function sayHello()
    {
        echo 'Hello Universe!' . PHP_EOL;
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();