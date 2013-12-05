<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 26/10/13
 * Time: 20:52
 * To change this template use File | Settings | File Templates.
 */

$a = 1;
$b = 0;
$c = 3;

if (!(!$a && $b)) {
    if ($c > 3 || $b) {
        $answer = 9;
    } else {
        $answer = 12;
    }
} else {
    if ($b > 1 || $c) {
        $answer = 10;
    } else {
        $answer = 7;
    }
}

echo $answer . PHP_EOL;


$a = 20;
function convert($b)
{
    global $a;
    return $GLOBALS['c'] = $a + $b;
}

$d = $a + convert($a) + $c;

echo $d . PHP_EOL;

echo strftime("%d-%m-%Y", mktime(0, 0, 0, 6, 5, 2008));


