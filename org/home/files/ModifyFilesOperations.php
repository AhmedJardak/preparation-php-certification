<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 30/09/13
 * Time: 10:12
 * To change this template use File | Settings | File Templates.
 */

class ModifyFilesOperations
{


    function __construct()
    {
        echo copy("monfichier.txt", "monfichier.back");
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        echo rename("monfichier.back", "monfichier.back.txt");
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        if (file_exists("monfichier.back.txt")) {
            $result = (unlink("monfichier.back.txt")) ? "Suppression réalisée" : "Echec de
➥la suppression";
        } else {
            echo "Le fichier n'existe pas dans ce répertoire! <br>";
        }
        echo $result;
        echo PHP_EOL . "------------------------------" . PHP_EOL;
        echo filetype("monfichier.txt");
    }
}

new ModifyFilesOperations();