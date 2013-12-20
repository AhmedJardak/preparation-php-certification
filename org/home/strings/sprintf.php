<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/10/13
 * Time: 00:41
 * To change this template use File | Settings | File Templates.
 */


$s = 'key';
printf("[%'*-20s]", $s);
////---
$a = 0.5;
$b = 0.1;
$c = 16;
echo sprintf('%01.2lf %.1lf 0x%x', $a, $b, $c);
//--
$number1 = 250;
$number2 = 7;

$format = '%03d';

echo sprintf($format, $number1);
echo sprintf($format, $number2);

// output is 250007

//<!--Your answer:-->
//<!--%000d-->
//<!--%3d-->
//<!--%d3-->
//<!--%03d-->

