<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 13:59
 * To change this template use File | Settings | File Templates.
 */
$p = 10;
echo $string = <<<'END_OF_STRING'
this is a multi-line
string containing
and single quotes '
and double quotes "
and slashes \
$p
do not need to be escaped
END_OF_STRING;
