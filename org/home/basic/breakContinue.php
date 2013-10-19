<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */

$a = 3;
$b = 8;


foreach (range(2, 10) as $num) {
    while ($num > $a && $num < $b) {
        $num += 1;
        break 1;
    }
    echo $num;
}
