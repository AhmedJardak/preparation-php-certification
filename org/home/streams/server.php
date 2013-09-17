<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/09/13
 * Time: 10:11
 * To change this template use File | Settings | File Templates.
 */

$socket = stream_socket_server("tcp://127.0.0.1:1037");
//while ($conn = stream_socket_accept($socket)) {
//    fwrite($conn, "Hello World\n");
//    fclose($conn);
//}
//fclose($socket);
while ($conn = stream_socket_accept($socket)) {
    stream_filter_append($conn, 'string.toupper');
    stream_filter_append($conn, 'zlib.deflate');
    fwrite($conn, "Hello World\n");
    fclose($conn);
}
fclose($socket);