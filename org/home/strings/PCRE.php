<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 08/12/13
 * Time: 19:37
 * To change this template use File | Settings | File Templates.
 */

//$var = '$40 for a g3/400';
//echo preg_quote($var, '/');


//$str = 'Today is Today';

//    if (preg_match('/(.*)day/', $str, $matches)) {
//    echo $matches[1];
//        var_dump($matches);
//    }
//    else {
//    echo '-';
//    }

//    if (preg_match('/(.*?)day/', $str, $matches)) {
//        var_dump($matches);
//    echo $matches[1];
//    }
//    else {
//    echo '-';
//    }
//    -----
//    $fruits = "Apple\nOrange\nBanana";
//
//    if (preg_match_all('/^(.*)$/', $fruits, $matches)) {
//    echo $matches[1][1];
//    }
//    else {
//    echo "Hungry";
//    }

//---
$str = '0x0fc929cc';
$regex = '/[0-9a-f]{3,5}(C+)$/i';

if (preg_match($regex, $str, $matches)) {
    var_dump($matches);
    echo $matches[1];
} else {
    echo 'b';
}
//--
