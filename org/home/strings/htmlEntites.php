<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:07
 * To change this template use File | Settings | File Templates.
 */
$string = "<b>I like 'PHP' & I think it is \"cool\"</b>";

var_dump(htmlentities($string, ENT_QUOTES));
echo PHP_EOL;
var_dump(print htmlspecialchars($string));