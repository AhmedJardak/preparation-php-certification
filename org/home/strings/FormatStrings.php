<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 30/04/13
 * Time: 14:00
 */

namespace org\home\strings;


class FormatStrings
{

    function __construct()
    {
        echo number_format("100000.698") . PHP_EOL; // Shows 100,001
        echo number_format("100000.698", 3, ",", " ") . PHP_EOL; // Shows 100 000,698

        setlocale(LC_MONETARY, "en_US");
        //echo money_format('%.2n', "100000.698");
        $n = 123;
        $f = 123.45;
        $s = "A string";
        printf("%d", $n); // prints 123
        printf("%d", $f); // prints 123
// Prints "The string is A string"
        printf("The string is %s", $s);
// Example with precision
        printf("%3.3f", $f); // prints 123.450
// Complex formatting
        function showError($msg, $line, $file)
        {
            return sprintf("An error occured in %s on " .
                "line %d: %s", $file, $line, $msg);
        }

        showError("Invalid deconfibulator", __LINE__, __FILE__);
        $data = '123 456 789';
        $format = '%d %d %d';
        var_dump(sscanf($data, $format));

    }
}

new FormatStrings();