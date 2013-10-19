<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 16:51
 * To change this template use File | Settings | File Templates.
 */

class road
{
    private $data = array();
    private $car = "fiat";

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name] . " car";
        }
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }
}

$road = new road;
$road->car = 'volvo';
echo $road->car . PHP_EOL;


//}




