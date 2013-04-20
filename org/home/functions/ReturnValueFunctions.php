<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 20/04/13
 * Time: 18:40
 */
namespace org\home\functions {


    class ReturnValueFunctions
    {
        public function helloWorld()
        {
            echo "Hello world";
        }

        /**
         * return by value
         * @param $who
         */
        public function hello($who)
        {
            echo "Hello $who" . PHP_EOL;
            if ($who == "World") {
                return; // Nothing else in the function will be processed
            }
            echo ", how are you" . PHP_EOL;
        }

        function &query($sql)
        {
            $result = mysql_query($sql);
            return $result;
        }

        // The following is incorrect and will cause PHP to emit a notice when called.

        function &getHello()
        {
            return "Hello World";
        }

        function &getHelloCorrected()
        {
            $a = "Hello World Corrected";
            return $a;
        }

    }

}



