<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/09/13
 * Time: 10:13
 * To change this template use File | Settings | File Templates.
 */
$socket = stream_socket_client('tcp://127.0.0.1:1037');
//while (!feof($socket)) {
//    echo fread($socket, 100);
//}
//fclose($socket);

stream_filter_append($socket, 'zlib.inflate');
while (!feof($socket)) {
    echo fread($socket, 100);
}
fclose($socket);