<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:34
 * To change this template use File | Settings | File Templates.
 */
//function func(&$arraykey) {
//    return $arraykey; // function returns by value!
//}
//
//$array = array('a', 'b', 'c');
//foreach (array_keys($array) as $key) {
//    $y = &func($array[$key]);
//    $z[] =& $y;
//}
//
//var_dump($z);


//function &myFunction() {
//    $string = "MyString";
//    var_dump($string);
//
//    return ($undefined);
//}
//
//for($i = 0; $i < 10; $i++) {
//    $retval = myFunction();
//}
//
//
//function oranges(&$oranges = 17)
//{
//    $oranges .= 1;
//}
//$apples = 5;
//oranges($apples);
//echo ++$apples;


//function byReference(&$variable = 5)
//{
//    echo ++$variable;
//}
//byReference();

function dotEach($n)
{
    if ($n > 0) {
        dotEach(--$n);
        echo ".";
    } else {
        return $n;
    }
}

dotEach(4);