<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/10/13
 * Time: 17:50
 * To change this template use File | Settings | File Templates.
 */

class A
{
    public $amount = 10;
//    public static function __set_state($ar) {
//        $obj = new A;
//        $obj->amount = $ar['amount'];
//        return $obj;
//    }
}

$a = new A;
$a->amount = 50;
$b = var_export($a, true);
echo $b->amount;

echo PHP_EOL . "------------------" . PHP_EOL;

class M
{
    public function b(array $b)
    {
        print_r($b);
    }
}

M::b('6');
echo PHP_EOL . "------------------" . PHP_EOL;


//
class N
{
    function b()
    {
        echo __CLASS__;
    }
}

N::b();