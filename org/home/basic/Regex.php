<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 19/10/13
 * Time: 16:50
 * To change this template use File | Settings | File Templates.
 */

preg_match_all('/\\b[0-9]{2,4}\\b/',
    'the 4000number is 1000 or more ',
    $referers);

var_export($referers);