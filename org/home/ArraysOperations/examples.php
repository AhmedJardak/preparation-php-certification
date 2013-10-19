<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 21:53
 * To change this template use File | Settings | File Templates.
 */

namespace org\home\arraysoperations;


class examples
{

    function __construct()
    {
        $array = [
            "foo" => "bar",
            "bar" => "foo",
            "foo",
        ];
        $array{6} = "aze";
        $array[] = "aasdd";
        var_dump(array_count_values($array));
        //var_dump($array);
    }
}

new examples;