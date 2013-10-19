<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 19:12
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\OOP\traits;


trait traitEcho
{
    function line()
    {
        echo PHP_EOL . "---------------------------" . PHP_EOL;
    }
}

class Line
{
    use traitEcho;

    function __construct()
    {
    }
}