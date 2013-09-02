<?php

/**
 * preparation-php-certification
 * User: user
 * Date: 28/04/13
 * Time: 12:16
 */
namespace org\home\strings;
class Strings
{


    function __construct()
    {
        $a = 10;
        echo 'variable $a' . PHP_EOL;
        echo "variable $a\n";
        $me = "Davey";
        $names = array("Smith", "Jones", "Jackson");
        echo "There cannot be more than two {$me}s!";
        echo "Citation: {$names[1]}[1987]\n";
        $who = "World";
        echo <<<TEXT
                So I said, "Hello $who"
                this is good '"
                formatage directe du code
                
TEXT;
        echo 'This is \'my\' string' . PHP_EOL;
        $a = 10;
        echo "The value of \$a is \"$a\".";
        echo "Here’s an escaped backslash: - \ -\n";
        echo "Here’s a literal brace + dollar sign: {\$";
    }
}

new Strings();