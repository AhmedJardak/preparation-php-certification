<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 30/09/13
 * Time: 11:14
 * To change this template use File | Settings | File Templates.
 */

class Sample
{

    function __construct()
    {
        // $this->Example1();
        //$this->Example2();
        file_put_contents("samplr.txt", "this is a sample content");


    }

    public function Example1()
    {
        $file = fopen("myfile.txt", "r");

        while (!feof($file)) {
            echo fgets($file);
        }
        fclose($file);
    }

    public function Example2()
    {
// copy("myfile.txt","myfile2.txt");
        $array = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $f = fopen("myfile2.txt", "wr");
        for ($i = 0; $i < 50; $i++) {
            fwrite($f, $array[rand(0, strlen($array) - 1)]);
        }
    }
}

new Sample();