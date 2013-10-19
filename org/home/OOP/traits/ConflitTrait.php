<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 13/10/13
 * Time: 18:58
 * To change this template use File | Settings | File Templates.
 */
require "Line.php";
trait A
{
    public function smallTalk()
    {
        echo 'a';
    }

    public function bigTalk()
    {
        echo 'A';
    }
}

trait B
{
    public function smallTalk()
    {
        echo 'b';
    }

    public function bigTalk()
    {
        echo 'B';
    }
}

class Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker
{
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$talker = new Talker();
$talker->smallTalk();
$talker->bigTalk();
$line = new \org\home\OOP\traits\Line();
$line->line();
$aliasTalker = new Aliased_Talker();
$aliasTalker->talk();
