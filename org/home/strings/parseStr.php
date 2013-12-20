<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:11
 * To change this template use File | Settings | File Templates.
 */
$string = "a=10&b[]=20&c=30&d=40+50";
parse_str($string);
echo $a;
echo PHP_EOL;
echo $b[0];
echo PHP_EOL;
echo $c;
echo PHP_EOL;
echo $d;


echo PHP_EOL;

$str = "days=Mon&days=Wed"
    . "&fruit[1]=Apple&fruit[]=Banana&amp;age=13";

parse_str($str, $output);

// gettype will return 'array' or 'string'
echo gettype($output['days']);

echo ' - ';

// array_search will return the key
// where the first argument is located
echo array_search('Banana', $output['fruit']);

echo ' - ';

echo array_key_exists('age', $output) ? $output['age'] : 0;

