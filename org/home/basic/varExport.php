<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 10:46
 * To change this template use File | Settings | File Templates.
 */
class A
{
    public $var1;
    public $var2;
    private $var3;

    function __construct($var3)
    {
        $this->var3 = $var3;
    }


    public function __set_state($an_array)
    {
        $obj = new A($an_array['var3']);
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];


        return $obj;
    }
}

$a = new A(3);
$a->var1 = 5;
$a->var2 = 'foo';
var_export($a);
//eval('$b = ' . var_export($a, true) . ';');
//var_dump($b);