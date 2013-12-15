<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 08/12/13
 * Time: 14:20
 * To change this template use File | Settings | File Templates.
 */


$key = "new secret key";
$input = "This is a secret text.";
//encryption via TRIPLE DES algorithm
$encrypted_data = mcrypt_ecb(MCRYPT_3DES, $key,
    $input, MCRYPT_ENCRYPT);
echo $encrypted_data;
