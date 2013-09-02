<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 10/06/13
 * Time: 09:01
 */

class Varibles
{


    function __construct()
    {
        // $_10 = er;
        // ${'MyVar'}
        //     &$something = "pl";
        //      $10_somethings = "rt";
        // $aVaR = "plo";


        $a = array(new DateTime(), new DateTime(), new DateTime());
        $b = array(new DateTime(), new DateTime(), new DateTime());
        $c = $a + $b;
        print_r($c);

    }
}

new Varibles();