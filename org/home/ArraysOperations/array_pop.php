<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:56
 * To change this template use File | Settings | File Templates.
 */
function pears(Array $pears)
{
    if (count($pears) > 0) {
        echo array_pop($pears);
        pears($pears);
    }
}

$fruit = array("Anjo", "Bartlet");
pears($fruit);