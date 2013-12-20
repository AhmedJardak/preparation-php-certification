<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 16/12/13
 * Time: 21:47
 * To change this template use File | Settings | File Templates.
 */


$string = "111221";

for ($i = 0; $i < strlen($string); $i++) {

    $current = $string[$i];
    $count = 1;

    while (isset($string[$i + $count]) && ($string[$i + $count] == $current)) $count++;

    $newstring .= "$count{$current}";

    $i += $count - 1;
}

print $newstring;
