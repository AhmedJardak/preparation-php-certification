<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 21:33
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\OOP\traits;


trait PropertiesTrait
{
    public $x = 1;
}

class PropertiesExample
{
    use PropertiesTrait;
}

$example = new PropertiesExample;
echo $example->x;