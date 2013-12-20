<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 10:03
 * To change this template use File | Settings | File Templates.
 */
function b(&$number)
{
    ++$number;

}

function a($number)
{
    return (b($number) * $number);
}


echo a(5);