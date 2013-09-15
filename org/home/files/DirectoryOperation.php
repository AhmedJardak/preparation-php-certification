<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/09/13
 * Time: 10:49
 * To change this template use File | Settings | File Templates.
 */

class DirectoryOperation {

    function __construct()
    {
        echo "The current working directory is " . getcwd().PHP_EOL;
       // $success = chdir ('../');
       // echo "The current working directory is " . getcwd().PHP_EOL;
        if (!mkdir ('newdir/mydir', 0666, true)) {
        throw new Exception ("Unable to create directory");
    }

    }
}
new DirectoryOperation();