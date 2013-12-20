<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 14:56
 * To change this template use File | Settings | File Templates.
 */
class A
{
}

;
class B1 extends A
{
}

;
class_alias('A', 'B2');
$b1 = new B1;
echo get_class($b1);
$b2 = new B2;
echo get_class($b2);