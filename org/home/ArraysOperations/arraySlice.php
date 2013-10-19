<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 16:33
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\arraysoperations;


class arraySlice
{


    function __construct()
    {
        $a = ["a", "b", "c", "d"];
        echo PHP_EOL . "--------array_slice-------" . PHP_EOL;
        $e = array_slice($a, -4, 2);
        var_dump($a);
        var_dump($e);
        echo PHP_EOL . "-------array_splice--------" . PHP_EOL;
        $returnOfArraySplice = array_splice($a, 0, 2, ["-", "-", "-"]);
        var_dump($a);
        var_dump($returnOfArraySplice);

    }

}

new arraySlice;