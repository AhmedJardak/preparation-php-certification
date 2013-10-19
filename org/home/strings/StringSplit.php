<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 12:09
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\strings;


class StringSplit
{

    function __construct()
    {
        $arr = str_split("123456", 3);
        echo $arr[0];

    }
}


$a = 3;
$b = 8;
foreach (range(2, 10) as $num) {
    while ($num > $a && $num < $b) {
        $num += 1;
        break 1;
    }
    echo $num;
}
//
//for ($i = 1, $j = 0; $i <= 5; $j += $i, print $j, $i++);
//
//preg_match_all('/\\b[0-9]{2,4}\\b/',
//    'the 4000number is 1000 or more ',
//    $referers);
//
//var_export($referers);
//
//class Species {
//    public function species($animal) {
//        echo $animal;
//    }
//}
//$ape = new Species('ape');

//
//class road {
//    private $data = array();
//    private $car = "fiat";
//
//    public function __get($name) {
//        if (array_key_exists($name, $this->data)) {
//            return $this->data[$name]." car";
//        }
//    }
//    public function __set($key, $value) {
//        $this->data[$key] = $value;
//    }
//}
//$road = new road;
//$road->car = 'volvo';
//echo $road->car.PHP_EOL;
//
//
//
//
//
//
//echo dirname('/etc/').PHP_EOL;