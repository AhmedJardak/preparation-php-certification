<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 08:46
 * To change this template use File | Settings | File Templates.
 */
$array = array('a' => 'John',
    'b' => 'Coggeshall',
    'c' => array('d' => 'John',
        'e' => 'Smith'));

function display($item, $key)
{
    print "$key => $item\n";
}

array_walk_recursive($array, "display");