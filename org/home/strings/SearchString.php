<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 28/04/13
 * Time: 21:01
 */
namespace org\home\strings;
class SearchString
{


    /**
     *
     */
    function __construct()
    {
        $haystack = "abcdefg";
        $needle = 'abc';
        if (strpos($haystack, $needle) !== false) {
            echo 'Found' . PHP_EOL;
        }

    }

    /**
     *
     */
    public function strPosition()
    {
        $haystack = '123456123456';
        $needle = '123';
        echo strpos($haystack, $needle) . PHP_EOL; // outputs 0
        echo strpos($haystack, $needle, 1) . PHP_EOL; // outputs 6
    }

    /**
     *
     */
    public function strStr()
    {
        $haystack = '123456';
        $needle = '34';
        echo strstr($haystack, $needle) . PHP_EOL; // outputs 3456


    }

    /**
     *
     */
    public function strInversePositionString()
    {
        // Case-insensitive search
        echo stripos('Hello World', 'hello') . PHP_EOL; // outputs zero
        echo stristr('Hello My World', 'my') . PHP_EOL; // outputs "My World"
        // Reverse search
        echo strrpos('123123', '123') . PHP_EOL; // outputs 3
    }

    /**
     *
     */
    public function strMatchMaskWhiteList()
    {
        $string = '133445abcdef';
        $mask = '12345';
        echo strspn($string, $mask) . PHP_EOL; // Outputs 6

    }

    /**
     *
     */
    public function strMatchMaskBlackList()
    {
        $string = '1abc234';
        $mask = 'abc';
        echo strspn($string, $mask, 1, 4) . PHP_EOL;
    }


}

$searchString = new SearchString();
echo "-----------------------------------------\n";
$searchString->strPosition();
echo "-----------------------------------------\n";
$searchString->strStr();
echo "-----------------------------------------\n";
$searchString->strInversePositionString();
echo "-----------------------------------------\n";
$searchString->strMatchMaskWhiteList();
echo "-----------------------------------------\n";
$searchString->strMatchMaskBlackList();
echo "-----------------------------------------\n";

echo "-----------------------------------------\n";
