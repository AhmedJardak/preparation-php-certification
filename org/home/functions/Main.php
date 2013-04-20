<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 20/04/13
 * Time: 20:07
 */
namespace org\home\functions {
//execution of samples if possible
    include "ReturnValueFunctions.php";
    /** @var $samples ReturnValueFunctions */
    $samples = new ReturnValueFunctions();
    print("-------------------------------------------------".PHP_EOL);
    echo "NULL:".$samples->helloWorld().PHP_EOL;
    print("-------------------------------------------------".PHP_EOL);
    $samples->hello("user");
    print("-------------------------------------------------".PHP_EOL);
    $samples->hello("World");
    print("-------------------------------------------------".PHP_EOL);
    echo $samples->query('select * from utilisateur').PHP_EOL;
    print("-------------------------------------------------".PHP_EOL);
    $samples->getHello();
    print("-------------------------------------------------".PHP_EOL);
    echo $samples->getHelloCorrected().PHP_EOL;
    print("-------------------------------------------------".PHP_EOL);




}
