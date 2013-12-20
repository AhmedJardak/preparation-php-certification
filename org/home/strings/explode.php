<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */
$str = 'one|two|three|four';
print_r(explode('|', $str, 2));
print_r(explode('|', $str, -2));