<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/09/13
 * Time: 09:34
 * To change this template use File | Settings | File Templates.
 */

class FilesOperation
{

    function __construct()
    {
        //$this->fopenOperation();
        $this->ccommOpenFileOperation();
    }

    public function fopenOperation()
    {
        $file = fopen("counter.txt", 'a+');
        if ($file == false) {
            die ("Unable to open/create file");
        }
        if (filesize("counter.txt") == 0) {
            $counter = 0;
        } else {
            $counter = (int)fgets($file);
        }
        ftruncate($file, 0);
        $counter++;
        fwrite($file, $counter);
        echo "There has been $counter hits to this site.";
    }

    public function ccommOpenFileOperation()
    {
        if (!file_exists("counter.txt")) {
            throw new Exception ("The file does not exists");
        }
        $file = fopen("counter.txt", "r");
        $txt = '';
        while (!feof($file)) {
            $txt .= fread($file, 1);
        }
        echo "There have been $txt hits to this site.";
    }
}

new filesOperation;