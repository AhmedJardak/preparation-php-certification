<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 19:31
 * To change this template use File | Settings | File Templates.
 */

require "Line.php";

(new \org\home\OOP\traits\Line())->line();

trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!';
    }
}

// Modification de la visibilité de la méthode sayHello
class MyClass1
{
    use HelloWorld {
        sayHello as protected;
    }
}

// Utilisation d'un alias lors de la modification de la visibilité
// La visibilité de la méthode sayHello n'est pas modifiée
class MyClass2
{
    use HelloWorld {
        sayHello as private myPrivateHello;
    }
}

$myClass1 = new MyClass1();

var_dump($myClass1);

(new \org\home\OOP\traits\Line())->line();

$myClass2 = new MyClass2();

var_dump($myClass2);