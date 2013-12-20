<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 14:57
 * To change this template use File | Settings | File Templates.
 */
$car = array(
    'year' => 2010,
    'make' => 'Porsche',
    'model' => 911
);

while ($value = next($car)) {
    echo $value;
}