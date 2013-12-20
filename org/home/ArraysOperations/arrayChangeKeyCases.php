<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:43
 * To change this template use File | Settings | File Templates.
 */
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
print_r(array_change_key_case($age, CASE_UPPER));