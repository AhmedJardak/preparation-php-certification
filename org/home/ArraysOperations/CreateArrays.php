<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 21:55
 */

namespace org\home\arraysoperations;


/**
 * Class CreateArrays
 * @package org\home\arraysoperations
 */
class CreateArrays
{

    function __construct()
    {
        $a = array();
        $a = array(10, 20, 30);
        $a = array('a' => 10, 'b' => 20, 'cee' => 30);
        $a = array(5 => 1, 3 => 2, 1 => 3,);

        $x[] = 10;
        $x[1] = 11;
        echo $x[0] . PHP_EOL; // Outputs 10
        echo $x[1] . PHP_EOL;
        print_r($a);
        var_dump($a);
        $array = array();
        $array[] = array(
            'foo',
            'bar'
        );
        $array[] = array(
            'baz',
            'bat'
        );
        echo $array[0][1] . "  " . $array[1][0];

    }
}

new CreateArrays();