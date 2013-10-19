<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 16:51
 * To change this template use File | Settings | File Templates.
 */

namespace samples;
class Species
{
    public function species($animal)
    {
        echo $animal . PHP_EOL;
    }
}

$ape = new Species('ape');







