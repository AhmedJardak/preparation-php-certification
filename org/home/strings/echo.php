<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 14:00
 * To change this template use File | Settings | File Templates.
 */

//--
$foo = 'bar';

echo '$foo\'' . "$foo\'";
echo "//--" . PHP_EOL;
$str = nl2br("foo\nbar");
// nl2br doesn't remove the \n
$str = str_replace("\n", "", $str);
echo $str;
