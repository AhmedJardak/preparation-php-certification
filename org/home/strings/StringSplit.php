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


new StringSplit;
