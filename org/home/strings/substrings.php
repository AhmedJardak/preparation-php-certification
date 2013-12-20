<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 11:30
 * To change this template use File | Settings | File Templates.
 */
$str = 'abcd';
echo substr($str, 0, 1);
echo PHP_EOL;
echo substr($str, 0, -1); //length -1
echo PHP_EOL;
echo substr($str, 3, 1);
echo PHP_EOL;
echo substr($str, 3);
echo PHP_EOL;
echo substr($str, -3);
