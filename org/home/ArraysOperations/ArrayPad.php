<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 14/10/13
 * Time: 18:55
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\arraysoperations;


class ArrayPad
{

    function __construct()
    {
        $input = array(12, 10, 9);

        $result = array_pad($input, 5, 0);
// Le résultat est : array(12, 10, 9, 0, 0)
        print_r($result);

        $result = array_pad($input, -7, -1);
// Le résultat est : array(-1, -1, -1, -1, 12, 10, 9)
        print_r($result);
        $result = array_pad($input, 2, "noop");
// pas complété
        print_r($result);

    }
}

new ArrayPad;