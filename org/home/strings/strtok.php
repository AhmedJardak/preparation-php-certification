<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 08/12/13
 * Time: 19:05
 * To change this template use File | Settings | File Templates.
 */
$string = "Give somebody a hard time";
$var = strtok($string, " ");
//echo $var;
while ($var != false) {
    echo "$var<br />";
    $var = strtok(" ");
}