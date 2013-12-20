<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:12
 * To change this template use File | Settings | File Templates.
 */

/**
 * @param $array
 */
function show($array)
{
    foreach ($array as $keys => $values) {
        print "$keys = $values" . PHP_EOL;
    }
}

function separator()
{
    echo PHP_EOL . "---" . PHP_EOL;
}


$array = array("a1" => 'x', "a3" => 'z', "a2" => 'e');
ksort($array); //préservation des clés
show($array);
separator();
asort($array); // préservation des clés
show($array);
separator();
sort($array); //sans préservation des clés
show($array);



