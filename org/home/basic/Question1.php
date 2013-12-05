<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 30/10/13
 * Time: 22:01
 * To change this template use File | Settings | File Templates.
 */
$str1 = '57 channels';
$str2 = '1/2 a pack of cigarettes';
$str3 = '0x10';

if ($str1 == 57) {
    echo 'a';
} else {
    echo 'b';
}

if ($str2 == 0.5) {
    echo 'c';
} else if ($str2 == 1) {
    echo 'd';
} else {
    echo 'e';
}

if ($str3 == 0) {
    echo 'f';
} else if ($str3 == 16) {
    echo 'g';
} // 0x10 is 16 in decimal
else if ($str3 == 0x10) {
    echo 'h';
}
