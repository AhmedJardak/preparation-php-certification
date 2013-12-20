<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 08:53
 * To change this template use File | Settings | File Templates.
 */
$a = array(1 => 0, 3 => 2, 6 => 6);
$b = array(2 => 0, 3 => 2, 4 => 6);

print_r(array_intersect($a, $b));
print_r(array_intersect_assoc($a, $b));