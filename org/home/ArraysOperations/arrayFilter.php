<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:58
 * To change this template use File | Settings | File Templates.
 */
$ar = array(0, 1, 2, 4, "", "000");
var_dump(array_filter($ar));
var_dump($ar);


function test_odd($var)
{
    return ($var & 1);
}

$a1 = array("a", "b", 2, 3, 4, 5, 6, 7, 8, 9);
print_r(array_filter($a1, "test_odd"));