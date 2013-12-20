<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:05
 * To change this template use File | Settings | File Templates.
 */
$oranges = 10;
$apples = 5;

$string = "I have %d apples and %d oranges";
printf($string, $apples, $oranges);


echo PHP_EOL;
$str = printf('%.1f', 5.3);

echo trim('PHP ' . $str);