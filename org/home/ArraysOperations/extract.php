<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 08:47
 * To change this template use File | Settings | File Templates.
 */
$array = array('a' => 'John',
    'b' => 'Coggeshall',
    'c' => array('d' => 'John',
        'e' => 'Smith'));

function something($array)
{
    var_dump(extract($array));

    return $c['e'];
}

print something($array);