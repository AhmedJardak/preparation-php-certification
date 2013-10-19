<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/10/13
 * Time: 17:21
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\arraysoperations;


class ArrayPush
{

    function __construct()
    {
        $a = [1, 2, 3, 4];
        array_push($a, 5, 6);
        $p = array_pop($a);
        print_r($a);
        echo "element poped is " . $p;
        array_shift($a);
        print_r($a);
        array_unshift($a, 100, 101);
        print_r($a);
    }
}

new ArrayPush();