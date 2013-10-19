<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 19:43
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\OOP\traits;


trait Hello
{
    public function sayHelloWorld()
    {
        echo 'Hello' . $this->getWorld();
    }

    abstract public function getWorld();
}

class MyHelloWorld1
{
    private $world;
    use Hello;

    public function getWorld()
    {
        return $this->world;
    }

    public function setWorld($val)
    {
        $this->world = $val;
    }
}

$hello = new MyHelloWorld1();

$hello->sayHelloWorld();
