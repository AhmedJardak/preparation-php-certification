<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */
define('FOO', 10);
$array = array(10 => FOO, "FOO" => 20);
print $array[$array[FOO]] * $array["FOO"];