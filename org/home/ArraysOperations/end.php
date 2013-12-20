<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 14:59
 * To change this template use File | Settings | File Templates.
 */
$numbers = array(5, 6, 7, 8);
end($numbers);

while (key($numbers)) {
    echo current($numbers);
    prev($numbers);
}