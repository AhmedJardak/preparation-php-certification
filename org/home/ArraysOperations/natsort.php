<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 15:02
 * To change this template use File | Settings | File Templates.
 */
$filenames = array(
    'img12.png',
    'img7.png',
    'img21.png',
    'img1.png'
);

var_dump(natsort($filenames)); //reservation des clés
echo $filenames[0];
var_dump($filenames);
$values = array_values($filenames);

echo $values[1];