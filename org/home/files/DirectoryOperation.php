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
        //$this->chMkdirFunctions();
       // $this->accessControlFunctions("newdir");
      //  $this->accessControlFunctions("counter.txt");
        //$this->chmodchagrpFunctions();

        $f = fopen('http://www.google.tn',"r");
$page = '';
if ($f) {
    while ($s = fread ($f, 1000)) {
        $page .= $s;
    }
    echo $page;
} else {
    throw new Exception ("Unable to open connection to www.google.tn");
}
        
        
        
        


    }

    public function chMkdirFunctions()
    {
        echo "The current working directory is " . getcwd() . PHP_EOL;
        // $success = chdir ('../');
        // echo "The current working directory is " . getcwd().PHP_EOL;
        if (!mkdir('newdir/mydir', 0666, true)) {
            throw new Exception ("Unable to create directory");
        }
    }

    public function accessControlFunctions($filename)
    {
//        • is_dir()—Checks if the path is a directory
//        • is_executable()—Checks if the path is executable
//        • is_file()—Checks if the path exists and is a regular file
//        • is_link()—Checks if the path exists and is a symlink
//          • is_readable()—Checks if the path exists and is readable
//          • is_writable()—Checks if the path exists and is writable
//          • is_uploaded_file()—Checks if the path is an uploaded file (sent via HTTP POST)
        if (is_dir($filename)) {
            echo "is_dir:true" . PHP_EOL;
        }
        if (is_executable($filename)) {
            echo "is_executable:true" . PHP_EOL;
        }
        if (is_file($filename)) {
            echo "is_file:true" . PHP_EOL;
        }
        if (is_link($filename)) {
            echo "is_link:true" . PHP_EOL;
        }
        if (is_readable($filename)) {
            echo "is_readable:true" . PHP_EOL;
        }
        if (is_writable($filename)) {
            echo "is_writable:true" . PHP_EOL;
        }
        if (is_uploaded_file($filename)) {
            echo "is_uploaded_file:true" . PHP_EOL;
        }
    }

    public function chmodchagrpFunctions()
    {
// chmod(), chgrp() and chown()
        chmod("myfile.txt", 0666);
    }
}
new DirectoryOperation();