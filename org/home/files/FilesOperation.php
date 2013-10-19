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
        // $this->ccommOpenFileOperation();
        //  $this->fseekftellOperation();
        // $this->fgetcsvfputcsvOperation();
        // $this->fgetcontentfputcontentOperation();
        //$this->fwritePutsFunctions();
        //$this->RewindFunction();
        // $this->readTotalFileFunctions();
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        $fileOPen = fopen("nex.tex", "c+");
        fpassthru($fileOPen);


    }

    public function fopenOperation()
    {
        $file = fopen("counter.txt", 'a+');
        var_dump($file);
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

    public function fseekftellOperation()
    {
        $file = fopen('counter.txt', 'r+');
        //fread($file,6);
        fseek($file, 10, SEEK_SET);
        echo ftell($file);
    }

    public function fgetcsvfputcsvOperation()
    {
        $f = fopen('file.csv', 'w+');
        while ($row = fgetcsv($f)) {
// handle values
        }
        $values = array("Davey Shafik", "http://zceguide.com", "Win Prizes!");
        fputcsv($f, $values);
    }

    public function fgetcontentfputcontentOperation()
    {
        $file = file_get_contents("myfile.txt");
        $data = "My Data\n";
        file_put_contents("myfile.txt", $data, FILE_APPEND);
        $data = array("More Data", "And More", "Even More");
        file_put_contents("myfile.txt", $data, FILE_APPEND);
        /*
         *      •  FILE_USE_INCLUDE_PATH — Causes the function to use the include_path to find the file
                • FILE_APPEND — Appends the data to the file, rather than overwriting
                • LOCK_EX — Acquire an exclusive lock before accessing the file. (PHP > 5.1.0
         * */
    }

    public function fwritePutsFunctions()
    {
        if (!file_exists("monfich.txt")) {
            touch("monfich.txt", time());
            tmpfile("temp.txt");
        }
        $file = fopen("counter.txt", 'a+');
        var_dump($file);
        $id_file = fopen("monfichier.txt", "a+");
        // flock($id_file, LOCK_SH); //
        //ou encore
        //flock($id_file,1 ou 2);
        //opérations de lecture et/ou d'écriture
        fwrite($id_file, "fff\n");
        fputs($id_file, "qqq\n");
        flock($id_file, LOCK_UN);
        //ou encore
        //flock($id_file,3);
        fclose($id_file);
    }

    public function RewindFunction()
    {
        $file = fopen("counter.txt", 'a+');
        fseek($file, 50);
        echo ftell($file) . PHP_EOL;
        rewind($file);
        echo ftell($file) . PHP_EOL;
        echo filesize("counter.txt") . PHP_EOL;
    }

    public function readTotalFileFunctions()
    {
        readfile("monfichier.txt");
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        $a = file("monfichier.txt");
        print_r($a);
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        $id_file = fopen("monfichier.txt", "rb");
        //rewind($id_file);
        //fseek($id_file,3);
        fpassthru($id_file);
    }
}

new filesOperation;