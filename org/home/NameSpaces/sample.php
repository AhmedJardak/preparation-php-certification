<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 09/10/13
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */
namespace a {
    class sample

    {
        function __construct()
        {
            echo __NAMESPACE__;
        }

    }
}
namespace b {
    class sample
    {

        function __construct()
        {
            echo __NAMESPACE__ . PHP_EOL;
        }
    }
}

namespace c {


    new \a\sample();

    new \b\sample();

}


