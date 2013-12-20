<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 14:04
 * To change this template use File | Settings | File Templates.
 */
$test1 = strcmp('hello', "hello");
$test2 = strcmp("Hello", "hello");
$test3 = strcmp('60', '500');

if ($test1 == 0) {
    echo "a";
} else if ($test1 < 0) {
    echo "b";
} else {
    echo "c";
}

if ($test2 == 0) {
    echo "d";
} else if ($test2 < 0) {
    echo "e";
} else {
    echo "f";
}

if ($test3 == 0) {
    echo "g";
} else if ($test3 < 0) {
    echo "h";
} else {
    echo "i";
}