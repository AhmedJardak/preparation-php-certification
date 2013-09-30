<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 27/09/13
 * Time: 17:35
 * To change this template use File | Settings | File Templates.
 */

function Example6()
{
    $input = array("php", 4.0, "green" => "red", "hello");
    print_r(array_reverse($input));
}


function Example5()
{
    $b = array(-2 => "a", '1b' => "b", "c", "d");
    print_r($b);
}

function Example4()
{
    echo array_sum("1", 2, 3, 4, 5) . PHP_EOL;
    echo array_sum(["1a", 2, 3, 4, 5]) . PHP_EOL;
    echo array_sum(["a1", 2, 3, 4, 5]) . PHP_EOL;
}


function Example3()
{
    $a = array('a' => 20, 1 => 36, 40);
    print_r(array_rand($a, 2));
    print_r($a);
    echo $a[0];
}


$arr = array(3 => "First", 2 => "Second", 1 => "Third");
list (, , $result) = $arr;
echo $result;

function Example2()
{
    $a = array(1 => 0, 'a' => 3, 4 => 6, 'a' => 5);
    $b = array(3 => 6, 4 => 3, 6 => 4);
    print_r(array_intersect($a, $b));
}


function Example1()
{
    $array_one = array(1, 2, 3, 4, 5);
    $array_two = array('A', 'B', 'C', 'D', 'E');
    $array_three = array_combine(array_reverse($array_one), $array_two);
    print_r($array_three);
}

Example6();
Example5();
Example4();
Example3();
Example2();
Example1();