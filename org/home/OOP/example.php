<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/10/13
 * Time: 21:37
 * To change this template use File | Settings | File Templates.
 */


class Hello
{
    private $_instance;

    private function __construct()
    {
        echo "Goodbye";
    }

    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new Hello();
        }
        return self::$_instance;
    }

    public function sayHello()
    {
        echo "hello";
    }
}


$phone = Hello::getInstance();
$result = $phone->sayHello();
