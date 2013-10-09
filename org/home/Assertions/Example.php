<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 09/10/13
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */
assert_options(ASSERT_WARNING, 1);
assert_options(ASSERT_CALLBACK, "handler");
assert(is_bool(1));
function handler($file, $line, $code)
{
    echo "error" . "line" . $line . PHP_EOL;
    echo $file . PHP_EOL;
    echo $code . PHP_EOL;
}




