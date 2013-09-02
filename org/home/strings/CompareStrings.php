<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 30/04/13
 * Time: 13:48
 */

namespace org\home\strings;


class CompareStrings
{


    function __construct()
    {
        $string = '123aa';
        if ($string == 123) {
            // The string equals 123
            echo "operator == equals\n";
        }
        if ($string === 123) {
            // The string equals 123
            echo "operator === equals\n";
        }

        $str = "Hello World";
        if (strcmp($str, "hello world") === 0) {
// We won't get here, because of case sensitivity
            echo "Case sensitive" . PHP_EOL;
        }
        if (strcasecmp($str, "hello world") === 0) {
// We will get here, because strcasecmp()
// is case-insensitive
            echo "Case insensitive" . PHP_EOL;
        }

        $s1 = 'abcd1234';
        $s2 = 'abcd5678';
// Compare the first four characters
        echo strncasecmp($s1, $s2, 4);
        //You can also perform a comparison between portions of strings by using the substr_compare() function.

    }
}

new CompareStrings();