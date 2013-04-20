<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 20/04/13
 * Time: 18:40
 */

namespace org\home\functions;


class Samples
{

    /**
     * return by value
     * @param $who
     */
    public function hello($who)
    {
        echo "Hello $who";
        if ($who == "World") {
            return; // Nothing else in the function will be processed
        }
        echo ", how are you";
    }


}