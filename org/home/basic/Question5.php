<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 30/10/13
 * Time: 22:14
 * To change this template use File | Settings | File Templates.
 */

$car = array(
    'year' => 2010,
    'make' => 'Porsche',
    'model' => 911
);

//next($car);

foreach ($car as $k => $v) {
    echo $v;
}