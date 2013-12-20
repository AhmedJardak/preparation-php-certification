<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 20/12/13
 * Time: 15:46
 * To change this template use File | Settings | File Templates.
 */
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel", "Mazda");
print_r(array_chunk($cars, 2));