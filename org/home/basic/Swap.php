<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/10/13
 * Time: 21:11
 * To change this template use File | Settings | File Templates.
 */

$a = 1;
$b = 26;
$a ^= $b ^= $a ^= $b;
echo $a . PHP_EOL . $b;
