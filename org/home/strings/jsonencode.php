<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 10:16
 * To change this template use File | Settings | File Templates.
 */
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$obj = json_decode($json, true);
var_dump(json_decode($json, true));
$newJSON = json_encode($obj);
echo $newJSON;


