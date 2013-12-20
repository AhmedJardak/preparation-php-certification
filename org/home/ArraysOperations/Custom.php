<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 08:40
 * To change this template use File | Settings | File Templates.
 */
$array = array(1 => 0, 2, 3, 4);

array_splice($array, 3, count($array), array_merge(array('x'), array_slice($array, 3)));

print_r($array);